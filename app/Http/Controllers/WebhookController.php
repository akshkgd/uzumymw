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
    $notes = $payload['payment']['notes'] ?? null;

    if ($notes) {
        $enrollment = CourseEnrollment::where('userId', $notes['UserId'])
                                     ->where('batchId', $notes['CourseId'])
                                     ->first();

        if ($enrollment && $enrollment->hasPaid == 0) {
            $enrollment->status = 1;
            $enrollment->hasPaid = 1;
            $enrollment->amountPaid = $payload['payment']['amount'];
            $enrollment->paidAt = Carbon::now();
            $enrollment->paymentMethod = $payload['payment']['method'];
            $enrollment->transactionId = $payload['payment']['id'];

            

            // Add a comment to field2 indicating the webhook data update
            $enrollment->field2 = 'webhook access granted';
            $enrollment->save();

            return response('Webhook Handled', 200);
        } else {
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
