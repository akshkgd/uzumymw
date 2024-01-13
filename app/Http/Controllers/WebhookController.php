<?php

namespace App\Http\Controllers;

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

class WebhookController extends Controller
{

    public function grantAccess(Request $request)
{   
    \Log::info('Webhook Request:', $request->all());
    $payload = $request->input('payload');
    $payment = $payload['payment'] ?? null;
    $entity = $payment['entity'] ?? null;
    $notes = $entity['notes'] ?? null;
    // checking for frontend or full stack course
    if($entity['amount'] > 1000000){
                    $user = User::where('email', $entity['email'])->first();
                    $a = new CourseEnrollment;
                    $a->userId = $user->id;
                    $a->batchId = ($entity['amount'] == 1099900) ? 68 : (($entity['amount'] == 1799800) ? 67 : 0);
                    $a->price = 24999;
                    $a->amountpayable = 24999;
                    $a->amountPaid = $entity['amount'];
                    $a->paidAt = Carbon::now();
                    $a->paymentMethod = $entity['method'];
                    $a->transactionId = $request->$entity['id'];
                    $a->invoiceId = $request->$entity['id'];
                    $a->status = 1;
                    $a->hasPaid =1;
                    $a->certificateId = substr(md5(time()), 0, 16);
                    $a->save();
    }
    else{
    if ($notes) {
        // $enrollment = CourseEnrollment::where('userId', $notes['UserId'])
        //                              ->where('batchId', $notes['CourseId'])
        //                              ->first();

        $enrollment = CourseEnrollment::findorFail($notes['enrollmentId']);

        if ($enrollment && $enrollment->hasPaid == 0) {
            $enrollment->status = 1;
            $enrollment->hasPaid = 1;
            $enrollment->amountPaid = $entity['amount'];
            $enrollment->paidAt = Carbon::now();
            $enrollment->paymentMethod = $entity['method'];
            $enrollment->transactionId = $entity['id'];

            // Add a comment to field2 indicating the webhook data update
            $enrollment->field2 = 'webhook access granted';
            $enrollment->save();

            return response('Webhook Handled', 200);
        } 
        else {
            // Add a comment or additional handling logic for cases when the enrollment has already been paid
            // ...
            if ($enrollment) {
                $enrollment->field2 = 'webhook called!!';
                $enrollment->save();
            }
            return response('Webhook Handled', 200);
        }
    } else {
        \Log::error('Payment notes not found in webhook request.');
        return response('Webhook Handled', 200);
    }
    }
}




}
