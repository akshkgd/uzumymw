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
        $maxAvatarLength = 255;
        $defaultAvatar = 'assets/img/mask.svg';
        try {
            
        
            $googleUser = Socialite::driver('google')->stateless()->user();
            $existUser = User::where('email',$googleUser->email)->first();
            

            if($existUser) {
                Auth::loginUsingId($existUser->id);
                // $existUser->avatar = $googleUser->avatar;
                try {
                    $existUser->avatar = $googleUser->avatar;
                    $existUser->save();
                } catch (\PDOException $e) {
                    if ($e->getCode() == '22001') { // SQLSTATE[22001]: String data, right truncated: 1406 Data too long for column
                        
                        $existUser->avatar = $defaultAvatar;
                        $existUser->save();
                    }
                    else{

                    }
                $existUser->save();
            }}
            else {
                $user = new User;
                $user->name = $googleUser->name;
                $user->email = $googleUser->email;
                $user->is_verified = 1;
                $user->email_verified_at = Carbon::now();
                $user->google_id = $googleUser->id;
                $user->password = md5(rand(1,10000));
                try {
                    $user->avatar = $googleUser->avatar;
                } catch (\Exception $e) {
                    $user->avatar = $defaultAvatar;
                }
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
