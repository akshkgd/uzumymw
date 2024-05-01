<?php

namespace App\Traits;
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
trait SubscriptionManagement
{
    function createSubscription($paymentInfo)
    {
        $email = $paymentInfo->email;
        $user = User::where('email', $email)->first();
        if (!$user) {
            $user = $this->createUser($paymentInfo);
            Auth::loginUsingId($user->id);
        }
        $subscription = $this->grantSubscriptionAccess($user, $paymentInfo);
        return $subscription;
    }

    

    private function createUser($request)
    {
        $user = new User;
        $user->name = substr($request->email, 0, strpos($request->email, "@"));
        $user->email = $request->email;
        $user->password = bcrypt(Str::random(12));
        $user->is_verified = 1;
        $user->role = 0;
        $user->email_verified_at = Carbon::now();
        $user->save();
        return $user;
    }
    private function grantSubscriptionAccess($user, $paymentInfo){
        $a = new CourseEnrollment();
        $a->userId = $user->id;
        $a->batchId = 67;
        $a->price = 32000;
        $a->haspaid = 1;
        $a->subscriptionActiveOn = Carbon::now();
        $a->accessTill = Carbon::now()->addMonth();
        $a->subscriptionStatus = 1;
        $a->type = 1;
        $a->subscriptionId = $paymentInfo->notes->subscriptionId;
        $a->paymentMethod = $paymentInfo->method;
        $a->save();
        return $a;
    }

}
