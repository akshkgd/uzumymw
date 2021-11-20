<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Socialite;
use Auth;
use Exception;
use Carbon\Carbon;



class googlelogin extends Controller
{
    
    public function redirectToProvider()
    {
        return Socialite::driver('google')->stateless()->redirect();
    }


    public function handleProviderCallback()
    {
        try {
            
        
            $googleUser = Socialite::driver('google')->stateless()->user();
            $existUser = User::where('email',$googleUser->email)->first();
            

            if($existUser) {
                Auth::loginUsingId($existUser->id);
                $existUser->avatar = $googleUser->avatar;
                $existUser->save();
            }
            else {
                $user = new User;
                $user->name = $googleUser->name;
                $user->email = $googleUser->email;
                $user->is_verified = 1;
                $user->email_verified_at = Carbon::now();
                $user->google_id = $googleUser->id;
                $user->password = md5(rand(1,10000));
                $user->avatar = $googleUser->avatar;
                $user->user_name = substr($googleUser->email, 0, strpos($googleUser->email, "@"));
               
               
                $user->save();
                Auth::loginUsingId($user->id);
            }
           
            return redirect()->intended('/home');
        } 
        catch (Exception $e) {
            return $e;
        }
    }
}
