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
use App\Traits\NotificationTrait;
use Illuminate\Support\Facades\Log;

class CourseEnrollmentObserver
{
    use NotificationTrait;

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
        // If payment status changed
        if ($courseEnrollment->isDirty('hasPaid')) {
            if ($courseEnrollment->hasPaid == 1) {
                // $this->sendEnrollmentNotification($courseEnrollment);
                
                
            } else if ($courseEnrollment->hasPaid == 0) {
                // Payment status changed to unpaid - reset email_sent flag
                // Use direct database update to avoid triggering observer again
                CourseEnrollment::where('id', $courseEnrollment->id)
                    ->update(['email_sent' => false]);
                
                
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
