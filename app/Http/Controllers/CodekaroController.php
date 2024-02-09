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

    public function test(){
        $api = new Api('rzp_live_YFwQzuSuorFCPM', 'ny2jusfOW90PMDWArPi4MvoM');
        $payment = $api->payment->fetch('pay_M6dNE9wZQqHNmv');
        dd($payment);
    }

    public function test1(Request $request)
{   
    \Log::info('Webhook Request:', $request->all());
    $payload = $request->all();
    $notes = $payload['payment']['notes'];

    $enrollment = CourseEnrollment::where('userId', $notes['UserId'])->where('batchId', $notes['CourseId'])->first();

    if ($enrollment->hasPaid == 0) {
        $enrollment->status = 1;
        $enrollment->hasPaid = 1;
        $enrollment->amountPaid = $payload['payment']['amount'];
        $enrollment->paidAt = Carbon::now();
        $enrollment->paymentMethod = $payload['payment']['method'];
        $enrollment->transactionId = $payload['payment']['id'];

        $enrollment->save();

        // Add a comment to field2 indicating the webhook data update
        $enrollment->field2 = 'webhook access granted';
        $enrollment->save();

        return response('Webhook Handled', 200);
    } else {
        // Add a comment or additional handling logic for cases when the enrollment has already been paid
        // ...
        $enrollment->field2 = 'webhook called!!';
        $enrollment->save();
        return response('Webhook Handled', 200);
    }
}

    public function upgradeCss(){
        if(Auth::check()){
            $user = Auth::user();
            $auth = Auth::check();
            $enrollment = CourseEnrollment::where('userId', $user->id)->where('hasPaid', 1)->whereHas('batch', function ($query) {
                $query->where('status', 1)
                    ->where('topicId', 100);
            })->first();
            return view('students.cssUpgrade', compact('enrollment', 'auth'));
        }
        else{
            $auth = false;
            return view('students.cssUpgrade', compact('auth'));
        }
        
    }

    public function upgradeCssCheckout(Request $request)
    {
        if($request->auth == 'true'){
            $user = Auth::user();
            $enrollment = CourseEnrollment::findorFail($request->id);
        }
        elseif($request->auth == 'false'){
                $user = User::where('email', $request->email)->first();
                if($user){
                    $enrollment = CourseEnrollment::where('userId', $user->id)->where('hasPaid', 1)->whereHas('batch', function ($query) {
                        $query->where('status', 1)
                            ->where('topicId', 100);
                    })->first();
                }
            }
            if($user && $enrollment){
                Auth::loginUsingId($user->id);
                $api = new Api('rzp_live_YFwQzuSuorFCPM', 'ny2jusfOW90PMDWArPi4MvoM');
                $batch = Batch::find($enrollment->batchId);
                $receiptId = Str::random(20);
                $amountPayable = 19900;
                $order  = $api->order->create(array('amount' => $amountPayable, 'currency' => 'INR', 'notes' => array('Name' =>strtok($user->name, ' '), 'purpose'=> 5,  'Email' => $user->email, 'Phone' => $user->mobile, 'Course' => $batch->name, 'StartDate' => Carbon::parse($batch->startDate)->toDateString(), 'EndDate' =>Carbon::parse($batch->endDate)->toDateString(), 'CourseId' => $batch->id, 'TopicId' => 105, 'enrollmentId'=> $enrollment->id )));
                $enrollment->invoiceID = $order->id;
                $enrollment->save();
                return view('students.checkout', compact('enrollment', 'batch','order'));
            }
            else{
                return view('students.noUpgrade');
            }
            
        }


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
                $this->successMail($enrollmentId);
            } else {
                $enrollmentId = $this->courseEnrollment($userExists->id, $input['courseId'], $response);
                $this->successMail($enrollmentId);
                session()->flash('alert-success', 'Payment Completed Successfully');
            }
            $enrollment = CourseEnrollment::find($enrollmentId);
            $batch = Batch::find($enrollment->batchId);
            return redirect('/bootcamp-success');
        }
    }
    public function bootcampSuccess(){
        return view('students.cssSuccess');

    }
    public function javascriptSuccess(){
        return view('students.jsSuccess');

    }
    public function mernSuccess(){
        return view('students.mernSuccess');

    }

    public function courseEnrollmentAuto(Request $request)
    {
        $input = $request->all();

        $userExists = User::where('email', $request->email)->first();
        if (!$userExists) {
            $userId =  $this->createUser($request);
            $enrollmentId = $this->courseEnrollment($userId, $input['courseId'], $request);
            
                Auth::loginUsingId($userId);
            
            // $this->apiTest($enrollmentId);
            // $this->workshopSuccessMail($enrollmentId);
            
        } else {
            $this->updateUtm($request, $userExists->id);
            $enrollmentId = $this->courseEnrollment($userExists->id, $input['courseId'], $request);
            if ($userExists->role == 0) {
                Auth::loginUsingId($userExists->id);
            }
            // $this->workshopSuccessMail($enrollmentId);
        }
        $enrollment = CourseEnrollment::find($enrollmentId);
        if($enrollment->batch->payable == 0){
                $enrollment->hasPaid = 1;
                $enrollment->paidAt = Carbon::now();
                $enrollment->save();
                return redirect('/css-success');
        }
        else{
            $enrollId = Crypt::encrypt($enrollmentId);
            return redirect('checkout/'.$enrollId);
        }
        
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
        $user->role = 0;
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
    private function courseEnrollment($userId, $courseId, $request)
    {
        $request = $request->all();
        $batch = Batch::findOrFail($courseId);
        $a = new CourseEnrollment;
        $a->userId = $userId;
        $a->batchId = $courseId;
        $a->price = $batch->price;
        $a->amountpayable = $batch->payable;
        if ($request['recordingsCheckbox'] == 1) {
            // Add the additional amount for the certificate fee (Rs 199)
            $a->certificateFee = 199;
        }
        $a->certificateId = substr(md5(time()), 0, 16);
        $a->save();
        $enrollmentId = $a->id;
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


        // Mail::to($user->email)->send(new OnboardingMail($email_data));
        Mail::to($user->email)->send(new workshopEnrollmentSuccess($email_data));

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
