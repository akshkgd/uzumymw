<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use App\Batch;
use App\User;
use App\CourseEnrollment;
use App\WorkshopEnrollment;
use Razorpay\Api\Api;
use Session;
use Redirect;
use Carbon\Carbon;
use App\Mail\EmailForQueuing;
use Mail;
use App\Mail\OnboardingMail;
use App\Traits\NotificationTrait;
use Illuminate\Support\Facades\Log;

class CourseEnrollmentController extends Controller
{
    use NotificationTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function checkEnroll($id)
    {
        $batch = Batch::findorFail($id);
        $isEnrolled = $this->isEnrolled($id);
        if($isEnrolled == 'true')
        {
            if($this->batchStatus($id)=='true')
            {
                if($this->inLimit($id)=='true')
                {
                    if($batch->payable == 0){
                    $a = new CourseEnrollment;
                    $a->userId = Auth::User()->id;
                    $a->batchId = $batch->id;
                    $a->price = $batch->price;
                    $a->amountpayable = $batch->payable;
                    $a->status = 1;
                    $a->haspaid = 1;
                    $a->save();
                    $enrollmentId = $a->id;
                    $this->successMail($enrollmentId);
                    session()->flash('alert-success', 'you have successfully enrolled in the course');
                    return redirect('/home');
                    }
                    else{
                    $a = new CourseEnrollment;
                    $a->userId = Auth::User()->id;
                    $a->batchId = $batch->id;
                    $a->price = $batch->price;
                    $a->amountpayable = $batch->payable;
                    $a->save();
                    $enrollId = Crypt::encrypt($a->id);
                    return redirect('checkout/'.$enrollId);
                    }
                }
                else{
                    session()->flash('alert-warning', 'All the seats are full');
                    return redirect('/home');
                }
                
            }
            else{
                session()->flash('alert-warning', 'Batch is not active');
                return redirect('/home');
            }
        }
        else{
            session()->flash('alert-warning', 'already enrolled');
            // dd ($isEnrolled);
            $enrollId = Crypt::encrypt($isEnrolled->id);
            return redirect('checkout/'.$enrollId);
            // dd ($isEnrolled);
            // return redirect( '/home');
        }

    }
    private function isEnrolled($id){
        $isEnrolledCount = CourseEnrollment::where('batchId', $id)->where('userId', Auth::user()->id)->get();

        $isEnrolled = CourseEnrollment::where('batchId', $id)->where('userId', Auth::user()->id)->first();
        if($isEnrolledCount->count() > 0){
            
            return $isEnrolled;
        }
        else{
            return 'true';
        }
        
    }

    private function enroll($batch){
        
        
    }
    private function batchStatus($id){
        $batch = Batch::findorFail($id);
        if($batch->status == 1)
        {
            return 'true';
        }
    }

    private function inLimit($id){
        $batch = Batch::findorFail($id);
        if($batch->limit !=''){
        $isEnrolled = CourseEnrollment::where('batchId', $id)->where('hasPaid', 1)->get();
        if($isEnrolled->count() < $batch->limit)
        return 'true';
        }
        
       
    }

    public function checkout($id)
    {
        $id = Crypt::decrypt($id);
        $enrollment = CourseEnrollment::findorFail($id);
        $batchId = Batch::findorFail($enrollment->batchId);
        // $this->sendOrderIdToPabbly($enrollment, $batchId);
        
        if (Auth::user()->id == $enrollment->userId && $enrollment->hasPaid == 0) {
            // $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));
            // $api = new Api('rzp_live_YFwQzuSuorFCPM', 'ny2jusfOW90PMDWArPi4MvoM');
            $api = new Api('rzp_live_je6jCwL5udOnN0', 'UpS378sb6wz0LkVTcyJmAq62');

            $batch = Batch::find($enrollment->batchId);
            $receiptId = Str::random(20);
            $amountPayable = $batchId->payable*100 + $enrollment->certificateFee*100;
            $order  = $api->order->create(array('amount' => $amountPayable, 'currency' => 'INR', 'notes' => array('Name' =>strtok(Auth::user()->name, ' '), 'Email' => Auth::user()->email, 'UserId'=> Auth::user()->id, 'Phone' => Auth::user()->mobile, 'Course' => $batchId->name, 'StartDate' => Carbon::parse($batch->startDate)->toDateString(), 'EndDate' =>Carbon::parse($batch->endDate)->toDateString(), 'CourseId' => $batchId->id, 'TopicId' => $batchId->topicId, 'enrollmentId'=> $id )));
            $enrollment->invoiceID = $order->id;
            $enrollment->save();

            

            return view('students.checkout', compact('enrollment', 'batch','order'));
        }
        else{
            session()->flash('alert-warning', 'Payment Already Compleated');
            if($batchId->topicId == 100){
                return redirect('/bootcamp-success');
            }
            elseif ($batchId->topicId == 101){
                return redirect('/javascript-success');
            }
            elseif ($batchId->topicId == 102){
                return redirect('/react-success');
            }
            elseif ($batchId->topicId == 103){
                return redirect('/css-success');
            }
            elseif ($batchId->topicId == 105){
                return redirect('/css-upgrade-success');
            }
            elseif ($batchId->topicId == 200){
                return redirect('/demo-success');
            }

            else{
            return redirect('/home');

            }
        }
        
    }
    public function payment(Request $request)
    {
        try {
            $input = $request->all();
            $api = new Api('rzp_live_je6jCwL5udOnN0', 'UpS378sb6wz0LkVTcyJmAq62');
            $payment = $api->payment->fetch($input['razorpay_payment_id']);
            
            if(count($input) && !empty($input['razorpay_payment_id'])) {
                $response = $api->payment->fetch($input['razorpay_payment_id']);
                
                // Update enrollment status
                $enrollment = CourseEnrollment::where('invoiceId', $response['order_id'])
                    ->update([
                        'status' => 1, 
                        'hasPaid' => 1, 
                        'amountPaid' => $response['amount'], 
                        'paidAt' => Carbon::now(), 
                        'paymentMethod' => $response['method'], 
                        'transactionId' => $response['id']
                    ]);

                // Get the updated enrollment
                $enrollment = CourseEnrollment::where('invoiceID', $response['order_id'])->first();
                $batch = Batch::find($enrollment->batchId);

                // Send notifications
                // Log::info('Sending Pabbly webhook from payment endpoint', ['enrollment_id' => $enrollment->id]);
                // $this->sendPabblyWebhook($enrollment->id, $response['amount']);

                Log::info('Sending enrollment notification from payment endpoint', ['enrollment_id' => $enrollment->id]);
                $this->sendEnrollmentNotification($enrollment);

                // Handle redirects based on course type
                session()->flash('alert-success', 'Payment Completed Successfully');
                
                return $this->handlePaymentRedirect($batch);
            }   
        } catch (\Exception $e) {
            Log::error('Payment processing failed: ' . $e->getMessage(), [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            session()->flash('error', 'Payment processing failed. Please contact support.');
            return redirect('/home');
        }
    }

    private function handlePaymentRedirect($batch)
    {
        switch ($batch->topicId) {
            case 100:
                return redirect('/bootcamp-success');
            case 101:
                return redirect('/javascript-success');
            case 102:
                return redirect('/react-success');
            case 105:
                return redirect('/css-upgrade-success');
            case 10:
                return redirect('/mern-success');
            case 200:
                return redirect('/demo-success');
            default:
                return view('students.PaymentComplete', compact('enrollment', 'batch'));
        }
    }

    private function sendOrderIdToPabbly($enrollment, $batch){
        $pabblyWebhookUrl = 'https://connect.pabbly.com/workflow/sendwebhookdata/IjU3NjUwNTZjMDYzZTA0MzU1MjY0NTUzZDUxMzEi_pc';
        $name = $enrollment->students->name;
        $email = $enrollment->students->email;
        $data = [
            'firstName' => strtok($name, ' '),
            'email' => $email,
            'topicId' => $batch['topicId'],

            // Add any other data you want to send to the Zapier webhook
        ];
        $response = Http::post($pabblyWebhookUrl, $data);
    }

    

    public function myCourse(){
        $courses = CourseEnrollment::where('userId', Auth::user()->id)->get();
        $workshops = WorkshopEnrollment::where('userId', Auth::user()->id)->where('status', 1)->get();
        
        return view('students.myCourses', compact('courses', 'workshops'));
        
        
    }


    public function invoice($id){
        $id = Crypt::decrypt($id);
        $invoice = CourseEnrollment::findorFail($id);
        return view('students.invoice', compact('invoice'));
    }


    private function successMail($enrollment)
    {
        $courseEnrollment = CourseEnrollment::find($enrollment);
        $this->sendEnrollmentNotification($courseEnrollment);
    }
    
    
}


