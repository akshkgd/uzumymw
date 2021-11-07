<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use App\Batch;
use App\CourseEnrollment;
use App\WorkshopEnrollment;
use Razorpay\Api\Api;
use Session;
use Redirect;
use Carbon\Carbon;

class CourseEnrollmentController extends Controller
{
   
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
        if($this->isEnrolled($id)=='true')
        {
            if($this->batchStatus($id)=='true')
            {
                if($this->inLimit($id)=='true')
                {
                    $a = new CourseEnrollment;
                    $a->userId = Auth::User()->id;
                    $a->batchId = $batch->id;
                    $a->price = $batch->price;
                    $a->amountpayable = $batch->payable;
                    $a->save();
                    $enrollId = Crypt::encrypt($a->id);
                    return redirect('checkout/'.$enrollId);
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
            return redirect( '/home');
        }

    }
    private function isEnrolled($id){
        $isEnrolled = CourseEnrollment::where('batchId', $id)->where('userId', Auth::user()->id)->get();
        if($isEnrolled->count() == 0)
        return 'true';
        
       
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
        if (Auth::user()->id == $enrollment->userId && $enrollment->hasPaid == 0) {
            $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));
            $batch = Batch::find($enrollment->batchId);
            $receiptId = Str::random(20);
            $amountPayable = $batchId->payable*100;
            $order  = $api->order->create(array('amount' => $amountPayable, 'currency' => 'INR'));
            $enrollment->invoiceID = $order->id;
            $enrollment->save();
            return view('students.checkout', compact('enrollment', 'batch','order'));
        }
        else{
            session()->flash('alert-warning', 'Payment Already Compleated');
            return redirect('/home');
        }
        
    }
    public function payment(Request $request)
    {
        
        $input = $request->all();

        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));

        $payment = $api->payment->fetch($input['razorpay_payment_id']);
        
        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                
                // $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 
                $response = $api->payment->fetch($input['razorpay_payment_id']);
                // dd($response);
            } 
            catch (\Exception $e) {
                return  $e->getMessage();
                
                \Session::put('error',$e->getMessage());
                return redirect('home');
            }
            $enrollment = CourseEnrollment::where('invoiceId', $response['order_id'])->update(['status' => 1, 'hasPaid' => 1, 'amountPaid'=> $response['amount'], 'paidAt'=> Carbon::now(), 'paymentMethod'=> $response['method'], 'transactionId'=> $response['id'] ]);
            
            \Session::put('success', 'Payment successful');
        return redirect('/home');
            
        }
        
        
        
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
    
}