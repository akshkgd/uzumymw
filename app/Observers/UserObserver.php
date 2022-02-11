<?php

namespace App\Observers;

use App\User;
use App\Notifications\welcomeEmailNotification;
use App\Notifications\courseTest;
use Illuminate\Notifications\Notifiable;
use App\Mail\WelcomeEmail;
use App\Mail\testMail;
use App\Mail\EmailForQueuing;
use Mail;
use Ognjen\Laravel\AsyncMail;

class UserObserver 
{
    /**
     * Handle the user "created" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function created(User $user)
    {
        
        $email_data = array(
            'name' => $user['name'],
            'email' => $user['email'],
        );
      
        // send email with the template
        //  Mail::send('welcome_email', $email_data, function ($message) use ($email_data) {
        //      $message->to($email_data['email'], $email_data['name'])
        //         ->subject('Welcome to Codekaro ' . strtok($email_data['name'], ' ') )
        //          ->from('info@codekaro.in', 'Codekaro');
        //  });
        // Mail::to($user['email'])->send(new testMail($user));
    }

    /**
     * Handle the user "updated" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        //
    }

    /**
     * Handle the user "deleted" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    /**
     * Handle the user "restored" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the user "force deleted" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
