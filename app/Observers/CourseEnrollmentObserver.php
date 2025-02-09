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
        if($courseEnrollment->isDirty('hasPaid') && $courseEnrollment->hasPaid == 1) {
            $this->sendEnrollmentNotification($courseEnrollment);
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
