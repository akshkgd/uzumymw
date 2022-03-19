<?php
namespace App\Observers;

use App\CourseEnrollment;
use App\Batch;
use App\User;
use App\Mail\WelcomeEmail;
use App\Notifications\courseTest;
use App\Mail\OnboardingMail;
use Illuminate\Notifications\Notifiable;
use App\Mail\EmailForQueuing;
use Mail;
use Ognjen\Laravel\AsyncMail;

class CourseEnrollmentObserver
{
    /**
     * Handle the course enrollment "created" event.
     *
     * @param  \App\CourseEnrollment  $courseEnrollment
     * @return void
     */
    public function created(CourseEnrollment $courseEnrollment)
    {
    
    }

    /**
     * Handle the course enrollment "updated" event.
     *
     * @param  \App\CourseEnrollment  $courseEnrollment
     * @return void
     */
    public function updated(CourseEnrollment $courseEnrollment)
    {
        
        if($courseEnrollment->isDirty('hasPaid')){
            if($courseEnrollment->hasPaid == 1){
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
                

                // dd($email_data);
                // send email with the template
                // Mail::send('mail.coursePurchase', $email_data, function ($message) use ($email_data) {
                //     $message->to($email_data['email'], $email_data['name'], $email_data['workshopName'], $email_data['workshopGroup'], $email_data['teacher'], $email_data['nextClass'])
                //         ->subject('Complete the onboarding process for '. $email_data['workshopName'])
                //         ->from('info@codekaro.in', 'Codekaro');
                // });
                // $user->notify(new courseTest($user));
                
                Mail::to($user->email)->send(new OnboardingMail($email_data));
            }
        }
        
    }

    /**
     * Handle the course enrollment "deleted" event.
     *
     * @param  \App\CourseEnrollment  $courseEnrollment
     * @return void
     */
    public function deleted(CourseEnrollment $courseEnrollment)
    {
        //
    }

    /**
     * Handle the course enrollment "restored" event.
     *
     * @param  \App\CourseEnrollment  $courseEnrollment
     * @return void
     */
    public function restored(CourseEnrollment $courseEnrollment)
    {
        //
    }

    /**
     * Handle the course enrollment "force deleted" event.
     *
     * @param  \App\CourseEnrollment  $courseEnrollment
     * @return void
     */
    public function forceDeleted(CourseEnrollment $courseEnrollment)
    {
        //
    }
}
