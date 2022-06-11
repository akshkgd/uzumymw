<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use App\Batch;
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
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount']-$payment['fee']));

                // $response = $api->payment->fetch($input['razorpay_payment_id']);
                // dd($response);
            } catch (\Exception $e) {
                return  $e->getMessage();
                
                Session::put('error', $e->getMessage());
                return redirect('home');
            }
            $userExists = User::where('email', $response->email)->first();

            if (! $userExists) {
                $userId =  $this->createUser($response);
                $enrollmentId = $this->courseEnrollment($userId, $input['courseId'], $response);
                $this->successMail($enrollmentId);

            } else {
                $enrollmentId = $this->courseEnrollment($userExists->id, $input['courseId'], $response);
                $this->successMail($enrollmentId);
                session()->flash('alert-success', 'Payment Completed Successfully');
            }
            $enrollment = CourseEnrollment::find($enrollmentId);
            $batch = Batch::find($enrollment->batchId);
            return view('students.PaymentComplete', compact('enrollment', 'batch'));

        }
    }

    private function createUser($request)
    {
        $user = new User;
        $user->name = substr($request->email, 0, strpos($request->email, "@"));
        $user->email = $request->email;
        $user->password = bcrypt(Str::random(12));
        $user->is_verified = 1;
        $user->email_verified_at = Carbon::now();
        $user->save();
        Auth::loginUsingId($user->id);
        return $user->id;
    }

    private function courseEnrollment($userId, $courseId, $response)
    {

    
        $enrollment = new CourseEnrollment();
        $enrollment->userId = $userId;
        $enrollment->batchId = $courseId;
        $enrollment->price = $response->amount-$response->fee;
        $enrollment->transactionId = $response->id;
        $enrollment->status = 1;
        $enrollment->hasPaid = 1;
        $enrollment->paidAt = Carbon::now();
        $enrollment->paymentMethod = $response->method;
        $enrollment->amountPaid = $response->amount-$response->fee;
        $enrollment->save();
        $enrollmentId = $enrollment->id;
        
        return $enrollmentId;
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
        
}



    
