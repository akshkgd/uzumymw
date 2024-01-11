<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Bus\Dispatchable;

class OnboardingMailL2 extends Mailable implements ShouldQueue
{
    use Dispatchable,Queueable, SerializesModels;
    public $email_data;
   
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email_data)
    {
        $this->email_data = $email_data;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Complete the onboarding process for '. $this->email_data['workshopName'])->view('mail.onboarding');
    }
}
