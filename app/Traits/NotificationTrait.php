<?php

namespace App\Traits;

use Mail;
use App\Mail\OnboardingMail;
use App\Mail\workshopEnrollmentSuccess;
use App\Notifications\CourseAccessGranted;
use Illuminate\Support\Facades\Log;

trait NotificationTrait
{
    /**
     * Send enrollment related notification or email
     * @param mixed $enrollment
     * @return void
     */
    protected function sendEnrollmentNotification($enrollment)
    {
        try {
            if ($enrollment->batch->type == 100) {
                $this->sendOnboardingEmail($enrollment);
            } else {
                $this->sendCourseAccessNotification($enrollment);
            }
        } catch (\Exception $e) {
            Log::error('Failed to send enrollment notification: ' . $e->getMessage());
        }
    }

    /**
     * Send onboarding email for workshops
     * @param mixed $enrollment
     * @return void
     */
    protected function sendOnboardingEmail($enrollment)
    {
        $email_data = [
            'name' => $enrollment->students->name,
            'workshopName' => $enrollment->batch->name,
            'nextClass' => $enrollment->batch->startDate,
            'workshopGroup' => $enrollment->batch->groupLink,
            'teacher' => $enrollment->batch->teacher
        ];
        
        Mail::to($enrollment->students->email)
            ->queue(new OnboardingMail($email_data));
    }

    /**
     * Send course access notification
     * @param mixed $enrollment
     * @return void
     */
    protected function sendCourseAccessNotification($enrollment)
    {
        $user = $enrollment->students;
        $user->notify(new CourseAccessGranted($enrollment));
    }

    /**
     * Send webhook data to Pabbly
     * @param int $id
     * @param float $amount
     * @return void
     */
    protected function sendPabblyWebhook($id, $amount)
    {
        try {
            $pabblyWebhookUrl = config('services.pabbly.webhook_url', 'https://connect.pabbly.com/workflow/sendwebhookdata/IjU3NjUwNTZiMDYzNDA0M2M1MjZlNTUzNDUxM2Ei_pc');
            $enrollment = CourseEnrollment::findOrFail($id);
            
            $data = $this->preparePabblyData($enrollment, $amount);
            
            $response = Http::post($pabblyWebhookUrl, $data);
            
            Log::info('Pabbly webhook sent successfully', ['enrollment_id' => $id]);
            
            return $response;
        } catch (\Exception $e) {
            Log::error('Failed to send Pabbly webhook: ' . $e->getMessage());
            throw $e;
        }
    }

    /**
     * Prepare data for Pabbly webhook
     * @param mixed $enrollment
     * @param float $amount
     * @return array
     */
    private function preparePabblyData($enrollment, $amount)
    {
        $user = $enrollment->students;
        $batchStartDate = Carbon::parse($enrollment->batch->startDate);
        $paidOn = Carbon::parse($enrollment->paidOn);

        return [
            'firstName' => strtok($user->name, ' '),
            'email' => $user->email,
            'phone' => $user->mobile,
            'batchName' => $enrollment->batch->name,
            'amount' => $amount/100,
            'startDate' => $batchStartDate->format('d-M-Y'),
            'utm' => $user->field1,
            'paidOn' => $paidOn->format('d-M-Y'),
            'paid' => $enrollment->amountPaid / 100,
            'link' => $enrollment->batch->groupLink,
            'batchId' => $enrollment->batchId,
        ];
    }
} 