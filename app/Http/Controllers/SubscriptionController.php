<?php

namespace App\Http\Controllers;
use Razorpay\Api\Api;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use App\Batch;
use App\User;
use App\CourseEnrollment;
use App\WorkshopEnrollment;
use Session;
use Redirect;
use Carbon\Carbon;
use App\Mail\EmailForQueuing;
use Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\OnboardingMail;
use App\Traits\SubscriptionManagement;
class SubscriptionController extends Controller
{
    use SubscriptionManagement;
    public function create(Request $request)
    {
       // this function creates order id send options data in response
       if(true){
        $api = new Api('rzp_live_je6jCwL5udOnN0', 'UpS378sb6wz0LkVTcyJmAq62');
        $planID = 'plan_O1K1sb26jttLY1'; 
        $createRzpsubscription = $api->subscription->create(array('plan_id' => $planID, 'customer_notify' => 1, 'quantity' => 1, 'total_count' => 24,
        'notes' => array('email' => $request->email, 'phone' => $request->phone),'notify_info'=>array('notify_phone' => $request->phone,'notify_email'=> $request->email)));

          //  return response()->json(['id'=> $createRzpsubscription->id,'url'=>$createRzpsubscription->short_url,'status'=>true]);
        $options =
        [
            "key"=> env('rzp_live_je6jCwL5udOnN0'),
            "name"=> "Codekaro", //your business name
            "description"=> "Full stack membership",
            "image"=> "logo.png",
            "subscription_id" => $createRzpsubscription->id, //This is a sample Order ID. Pass 
            "prefill"=> [ 
                "name"=> $request->name, //your customer's name
                "email"=> $request->email,
                "contact"=> $request->phone, //Provide the customer's phone number for better conversion rates 
            ],
            "notes"=> [
                "address"=> "Full stack membership",
                "subscriptionId" => $createRzpsubscription->id,
            ],
            "theme"=> [
                "color"=> "#000"
            ]

        ];
       
        //we need to fetch
        return response()->json(['checkoutData'=>$options,'status'=>true]);
       }
      return response()->json(['checkoutData'=>'','status'=>false]);

    }
    public function payment(Request $request)
    {
        // dd($request->all());
        $api = new Api('rzp_live_je6jCwL5udOnN0', 'UpS378sb6wz0LkVTcyJmAq62');
        $paymentInfo = $api->payment->fetch($request->razorpay_payment_id);
        if($paymentInfo->status == 'captured'){
                // dd($paymentInfo);
               $enrollment =  $this->createSubscription($paymentInfo);
               Auth::loginUsingId($enrollment->userId);
               return view('students.subscriptionActive', compact('enrollment'));
        }
    }
    public function startSubscriptionWebhook(Request $request){
        $webhookData = $request->all();
        $paymentInfo = (array) $webhookData['payload']['payment']['entity'];
        $paymentInfo['notes'] = ['subscriptionId' => $webhookData['payload']['subscription']['entity']['id']];
        \Log::info('Modified Payment Info:', $paymentInfo);
        $enrollment = $this->createSubscription($paymentInfo);
        return response('Webhook Handled', 200);
    }

    
}
