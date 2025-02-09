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
use Illuminate\Support\Facades\Http;
use Redirect;
use Carbon\Carbon;
use App\Mail\EmailForQueuing;
use Mail;
use App\Mail\OnboardingMail;
use App\Workshop;
use App\Mail\workshopEnrollmentSuccess;
use App\Notifications\CourseAccessGranted;
use App\Traits\NotificationTrait;

class WebhookController extends Controller
{
    use NotificationTrait;

//     public function grantAccess(Request $request)
//     {   
//     \Log::info('Webhook Request:', $request->all());
//     $payload = $request->input('payload');
//     $payment = $payload['payment'] ?? null;
//     $entity = $payment['entity'] ?? null;
//     $notes = $entity['notes'] ?? null;
//     if ($notes) {
//         // $enrollment = CourseEnrollment::where('userId', $notes['UserId'])
//         //                              ->where('batchId', $notes['CourseId'])
//         //                              ->first();
//         $enrollment = CourseEnrollment::findorFail($notes['enrollmentId']);
//         $sendPabbly = $this->sendPabbly($enrollment->id, $entity['amount']);
//         if ($enrollment && $enrollment->hasPaid == 0) {
//             $enrollment->status = 1;
//             $enrollment->hasPaid = 1;
//             $enrollment->amountPaid = $entity['amount'];
//             $enrollment->paidAt = Carbon::now();
//             $enrollment->paymentMethod = $entity['method'];
//             $enrollment->transactionId = $entity['id'];

//             // Add a comment to field2 indicating the w hjh jhjjjhj jjhjhj jj jhjhjhh hjhjhj uyuyu yuyuyu uy
//             $enrollment->field2 = 'webhook access granted';
//             $enrollment->save();

//             return response('Webhook Handled', 200);
//         } 
//         else {
//             // Add a comment or additional handling logic for cases when the enrollment has already been paid
//             // ...
//             if ($enrollment) {
//                 $enrollment->field2 = 'webhook called!!';
//                 $enrollment->save();
//             }
//             return response('Webhook Handled', 200);
//         }
//     } else {
//         \Log::error('Payment notes not found in webhook request.');
//         return response('Webhook Handled', 200);
//     }
    
// }

public function grantAccess(Request $request)
{   
    try {
        \Log::info('Webhook Request:', $request->all());

        // Extract payload data
        $payload = $request->input('payload');
        $paymentData = data_get($payload, 'payment.entity');
        $notes = data_get($paymentData, 'notes');

        // Check if required data is present
        if (!$paymentData || !$notes) {
            throw new \Exception('Payment data or notes not found in webhook request.');
        }
        $enrollment = CourseEnrollment::findorFail($notes['enrollmentId']);
        if (!$enrollment) {
            throw new \Exception('Course enrollment not found.');
        }
        if ($enrollment->hasPaid == 1) {
            $enrollment->field2 = 'Status is paid!!';
            $enrollment->save();
            $this->sendEnrollmentNotification($enrollment);
        } else {
            $enrollment->status = 1;
            $enrollment->hasPaid = 1;
            $enrollment->amountPaid = $paymentData['amount'];
            $enrollment->paidAt = Carbon::now();
            $enrollment->paymentMethod = $paymentData['method'];
            $enrollment->transactionId = $paymentData['id'];
            $enrollment->field2 = 'webhook access granted';
            $enrollment->save();

            // Use trait methods
            $this->sendEnrollmentNotification($enrollment);
            $this->sendPabblyWebhook($enrollment->id, $paymentData['amount']);
        }
        return response('Webhook Handled', 200);
    } catch (\Exception $e) {
        \Log::error('Error processing webhook request: ' . $e->getMessage());
        // return response('Error processing webhook request', 500);
        return response()->json([
            "status" => "success",
            "message" => "Response Accepted"
        ], 200);
        
    }
}



private function sendPabbly($id, $p){
    $pabblyWebhookUrl = 'https://connect.pabbly.com/workflow/sendwebhookdata/IjU3NjUwNTZiMDYzNDA0M2M1MjZlNTUzNDUxM2Ei_pc';
        $enrollment = CourseEnrollment::findOrFail($id);
        $name = $enrollment->students->name;
        $email = $enrollment->students->email;
        $batchName = $enrollment->batch->name; 
        $batchStartDate = Carbon::parse($enrollment->batch->startDate);
        $formattedStartDate = $batchStartDate->format('d-M-Y');
        $paidOn = Carbon::parse($enrollment->paidOn);
        $formattedPaidOn = $paidOn->format('d-M-Y');
        $amount = $p/100;
        $link = $enrollment->batch->groupLink;
        $user = $enrollment->students;
        $data = [
            'firstName' => strtok($name, ' '),
            'email' => $email,
            'phone' => $user->mobile,
            'batchName' => $batchName,
            'amount' => $amount,
            'startDate' => $formattedStartDate,
            'utm' =>$user->field1,
            'paidOn' =>$formattedPaidOn,
            'paid' => $enrollment->amountPaid / 100,
            'link' => $link,
            'batchId' => $enrollment->batchId,

            // Add any other data you want to send to the Zapier webhook
        ];
        $response = Http::post($pabblyWebhookUrl, $data);
}

}
