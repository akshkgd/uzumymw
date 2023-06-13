<?php

namespace App\Http\Controllers;
// require __DIR__ . '/vendor/autoload.php';
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use App\Batch;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use App\User;
use App\CourseEnrollment;
use App\WorkshopEnrollment;
use Razorpay\Api\Api;
use Redirect;
use Carbon\Carbon;
use App\Mail\EmailForQueuing;
use Mail;
use App\Mail\OnboardingMail;
use App\Workshop;
use App\Mail\workshopEnrollmentSuccess;
// use FacebookAds\Api;
use FacebookAds\Logger\CurlLogger;
use FacebookAds\Object\ServerSide\ActionSource;
use FacebookAds\Object\ServerSide\TestEventCode;
use FacebookAds\Object\ServerSide\Content;
use FacebookAds\Object\ServerSide\CustomData;
use FacebookAds\Object\ServerSide\DeliveryCategory;
use FacebookAds\Object\ServerSide\Event;
use FacebookAds\Object\ServerSide\EventRequest;
use FacebookAds\Object\ServerSide\UserData;

class CodekaroController extends Controller
{
    public function coursePayment(Request $request)
    {
        $input = $request->all();

        // $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));
        $api = new Api('rzp_live_YFwQzuSuorFCPM', 'ny2jusfOW90PMDWArPi4MvoM');
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
        if (count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount' => $payment['amount'] - $payment['fee']));

                // $response = $api->payment->fetch($input['razorpay_payment_id']);
                
            } catch (\Exception $e) {
                return  $e->getMessage();

                Session::put('error', $e->getMessage());
                return redirect('home');
            }
            $userExists = User::where('email', $response->email)->first();

            if (!$userExists) {
                $userId =  $this->createCourseUser($response);
                $enrollmentId = $this->courseEnrollment($userId, $input['courseId'], $response);
                // $this->successMail($enrollmentId);
            } else {
                $enrollmentId = $this->courseEnrollment($userExists->id, $input['courseId'], $response);
                // $this->successMail($enrollmentId);
                session()->flash('alert-success', 'Payment Completed Successfully');
            }
            $enrollment = CourseEnrollment::find($enrollmentId);
            $batch = Batch::find($enrollment->batchId);
            return redirect('/bootcamp-success');
        }
    }
    public function bootcampSuccess(){
        return view('students.bootcampSuccess');

    }

    public function workshopEnrollemnt(Request $request)
    {
        $input = $request->all();

        $userExists = User::where('email', $request->email)->first();
        if (!$userExists) {
            $userId =  $this->createUser($request);
            $enrollmentId = $this->createWorkshopEnrollment($userId, $input['courseId'], $request);
            // $this->apiTest($enrollmentId);
            // $this->workshopSuccessMail($enrollmentId);
            
        } else {
            $this->updateUtm($request, $userExists->id);
            $enrollmentId = $this->createWorkshopEnrollment($userExists->id, $input['courseId'], $request);
            if ($userExists->role == 0) {
                Auth::loginUsingId($userExists->id);
                // $this->apiTest($enrollmentId);
            }
            // $this->workshopSuccessMail($enrollmentId);
        }
        if ($enrollmentId === 0) {
            // session()->flash('alert-danger', 'You can not enroll in this workshop! ');
            // return redirect()->back();
            $enrollId = Crypt::encrypt($input['courseId']);
            return redirect('next-steps/'.$enrollId);
        }
        else {
            // $enrollment = WorkshopEnrollment::find($enrollmentId);
            $this->workshopSuccessMail($enrollmentId);
            $enrollId = Crypt::encrypt($input['courseId']);
            return redirect('workshop-enrollment-success/' . $enrollId);
        }
    }
    private function createUser($request)
    {
        $user = new User;
        if ($request->has('name')) {
            $user->name = $request->name;
        } else {
            $user->name = substr($request->email, 0, strpos($request->email, "@"));
        }
        $user->email = $request->email;
        if ($request->mobile) {
            $user->mobile = $request->mobile;
        }
        $user->password = bcrypt(Str::random(12));
        $user->is_verified = 1;
        $user->email_verified_at = Carbon::now();
        if ($request->has('source')) {
            $user->field1 = $request->source;
        }
        if ($request->has('medium')) {
            $user->field2 = $request->medium;
        }
        if ($request->has('campaign')) {
            $user->field3 = $request->campaign;
        }
        $user->save();
        dd($user);
        return $user->id;
    }


    private function createCourseUser($request)
    {
        $user = new User;
        
            $user->name = substr($request->email, 0, strpos($request->email, "@"));
        
        $user->email = $request->email;
        $user->mobile = $request->contact;
    
        $user->password = bcrypt(Str::random(12));
        $user->is_verified = 1;
        $user->email_verified_at = Carbon::now();
        $user->save();
        return $user->id;
    }
    private function updateUtm($request, $id)
    {
        $user = User::findOrFail($id);
        if ($user->field1 == '' || $user->field3 == '') {
            if ($request->has('source')) {
                $user->field1 = $request->source;
            }
            if ($request->has('medium')) {
                $user->field2 = $request->medium;
            }
            if ($request->has('campaign')) {
                $user->field3 = $request->campaign;
            }
            $user->save();
        }
    }
    private function courseEnrollment($userId, $courseId, $response)
    {
        $enrollment = new CourseEnrollment();
        $enrollment->userId = $userId;
        $enrollment->batchId = $courseId;
        $enrollment->price = $response->amount - $response->fee;
        $enrollment->transactionId = $response->id;
        $enrollment->status = 1;
        $enrollment->hasPaid = 1;
        $enrollment->paidAt = Carbon::now();
        $enrollment->paymentMethod = $response->method;
        $enrollment->amountPaid = $response->amount - $response->fee;
        $enrollment->save();
        $enrollmentId = $enrollment->id;
        Auth::loginUsingId($userId);
        return $enrollmentId;
    }

    private function createWorkshopEnrollment($userId, $workshopId, $response)
    {
        $workshop = Workshop::findOrFail($workshopId);
        $isEnrolled = WorkshopEnrollment::where('workshopId', $workshopId)->where('userId', $userId)->get();
        if (count($isEnrolled) > 0) {
            return 0;
        
        // $enrollId = Crypt::encrypt($isEnrolled[0]->id);
        // return redirect('next-steps/'.$enrollId);
        }
        elseif ($workshop->count() > 0 && $workshop->status == 1) {
            $enrollment = new WorkshopEnrollment();
            $enrollment->userId = $userId;
            $enrollment->workshopId = $workshopId;
            $enrollment->status = 1;
            $enrollment->certificateId = substr(md5(time()), 0, 16);
            $enrollment->save();
            $enrollmentId = $enrollment->id;
            return $enrollmentId;
        } else {
            return 0;
        }



        session()->flash('alert-danger', 'Workshop is full');
        return redirect('/');
    }

    private function successMail($enrollment)
    {
        $courseEnrollment = CourseEnrollment::find($enrollment);
        $user = User::find($courseEnrollment->userId);
        $workshop = Batch::find($courseEnrollment->batchId);

        $email_data = array(
            'name' => $user['name'],
            'email' => $user['email'],
            'workshopName' => $workshop['name'],
            'workshopGroup' => $workshop['groupLink'],
            'discord' => $workshop['groupLink1'],
            'nextClass' => $workshop['nextClass'],
            'teacher' => $workshop->teacher->name,

        );


        Mail::to($user->email)->send(new OnboardingMail($email_data));
    }
    private function workshopSuccessMail($enrollId)
    {
        $courseEnrollment = WorkshopEnrollment::find($enrollId);
        $user = User::find($courseEnrollment->userId);
        $workshop = Workshop::find($courseEnrollment->workshopId);
        $email_data = array(
            'name' => $user->name,
            'email' => $user->email,
            'workshopName' => $workshop['name'],
            'workshopGroup' => $workshop['groupLink'],
            'nextClass' => $workshop['nextClass'],
            'teacher' => $workshop->teacher->name,

        );

        // send email with the template
        // Mail::send('mail.workshopEnrollmentSuccess', $email_data, function ($message) use ($email_data) {
        //     $message->to($email_data['email'], $email_data['name'], $email_data['workshopName'], $email_data['workshopGroup'], $email_data['teacher'], $email_data['nextClass'])
        //         ->subject('Welcome to the '. $email_data['workshopName'])
        //         ->from('info@codekaro.in', 'Codekaro');
        // });
        Mail::to($email_data['email'])->send(new workshopEnrollmentSuccess($email_data));
    }

    private function apiTest($enrollId)
    {
    try {
        $courseEnrollment = WorkshopEnrollment::find($enrollId);
        $user = User::find($courseEnrollment->userId);
        $access_token = 'EAAQ6uEmyC0kBAPSPlsTgN8RotVhaTWNxXGCwessz0mZAHhbCAGbafqhB0Qs14nIsRfZBL36MrZBWhsn4G2TIfHFrm2GP9SgKBIa5ylWydZBsfFFE0VJANaKGmq2WUCV4zr5Ygfm1J1qJr8bc3wPKjnNFTGaVWAiRXVY941VVZAenXsR8h7dl2EvwkpBvBBicZD';
        $pixel_id = '438131724437018';

        $api = Api::init(null, null, $access_token);
        $api->setLogger(new CurlLogger());

        $user_data = (new UserData())
            ->setEmails(array($user->email))
            ->setPhones(array($user->mobile))
            // It is recommended to send Client IP and User Agent for Conversions API Events.
            ->setClientIpAddress($_SERVER['REMOTE_ADDR'])
            ->setClientUserAgent($_SERVER['HTTP_USER_AGENT'])
            ->setFbc('fb.1.1554763741205.AbCdEfGhIjKlMnOpQrStUvWxYz1234567890')
            ->setFbp('fb.1.1558571054389.1098115397');

        $content = (new Content())
        ->setProductId('ckwd1')
        ->setQuantity(1)
        ->setDeliveryCategory(DeliveryCategory::HOME_DELIVERY);

        $custom_data = (new CustomData())
        ->setContents(array($content))
        ->setCurrency('INR')
        ->setValue(0);

        $event = (new Event())
        ->setEventName('CompleteRegistration')
        ->setEventTime(time())
        ->setEventSourceUrl('https://codekaro.in/web-development-live-masterclass')
        ->setUserData($user_data)
        ->setCustomData($custom_data)
        ->setActionSource(ActionSource::WEBSITE);

        $events = array();
        array_push($events, $event);

        $request = (new EventRequest($pixel_id))
        ->setEvents($events);
        $response = $request->execute();
        // dd($response);
    }  
    catch(\Exception $e){
        // dd($e->getMessage());
        Log::error('Conversion API Error: ' . $e->getMessage());
    } 
    }
}
