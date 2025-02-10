<?php

namespace App\Traits;

use Mail;
use App\Mail\OnboardingMail;
use App\Mail\workshopEnrollmentSuccess;
use App\Notifications\CourseAccessGranted;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\CourseEnrollment;
use App\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Mail\OnboardingMailL2;

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
            // Check if payment is confirmed and email hasn't been sent
            if ($enrollment->hasPaid == 1 && !$enrollment->email_sent) {
                Log::info('Processing enrollment notification', [
                    'enrollment_id' => $enrollment->id,
                    'batch_type' => $enrollment->batch->type,
                    'topic_id' => $enrollment->batch->topicId,
                    'has_paid' => $enrollment->hasPaid,
                    'email_sent' => $enrollment->email_sent
                ]);

                if ($enrollment->batch->topicId == 100) {
                    Log::info('Sending onboarding email');
                    $this->sendOnboardingEmail($enrollment);
                } else if ($enrollment->batch->topicId == 700) {
                    Log::info('Sending L2 onboarding email');
                    Mail::to($enrollment->students->email)->send(new OnboardingMailL2([
                        'name' => $enrollment->students->name,
                        'workshopName' => $enrollment->batch->name,
                        'nextClass' => $enrollment->batch->nextClass,
                        'workshopGroup' => $enrollment->batch->groupLink,
                        'teacher' => $enrollment->batch->teacher->name,
                    ]));
                } else {
                    Log::info('Sending course access notification');
                    $this->sendCourseAccessNotification($enrollment);
                }

                // Update email_sent status in database first
                $enrollment->email_sent = true;
                $enrollment->save();
                
                Log::info('Notification sent and marked as sent', [
                    'enrollment_id' => $enrollment->id
                ]);
                return; // Add early return to prevent further processing
            }
            
            Log::info('Skipping enrollment notification', [
                'reason' => $enrollment->hasPaid == 0 ? 'not paid' : 'email already sent',
                'has_paid' => $enrollment->hasPaid,
                'email_sent' => $enrollment->email_sent
            ]);
            
        } catch (\Exception $e) {
            Log::error('Failed to send enrollment notification: ' . $e->getMessage(), [
                'enrollment_id' => $enrollment->id,
                'error' => $e->getMessage()
            ]);
            throw $e;
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
            'nextClass' => $enrollment->batch->nextClass,
            'workshopGroup' => $enrollment->batch->groupLink,
            'teacher' => $enrollment->batch->teacher->name,
        ];
        Mail::to($enrollment->students->email)->send(new OnboardingMail($email_data));
    }

    /**
     * Send course access notification
     * @param mixed $enrollment
     * @return void
     */
    protected function sendCourseAccessNotification($enrollment)
    {
        try {
            Log::info('Attempting to send course access notification', [
                'enrollment_id' => $enrollment->id,
                'user_id' => $enrollment->students->id ?? 'no_user',
                'user_email' => $enrollment->students->email ?? 'no_email'
            ]);
            
            $user = $enrollment->students;
            $user->notify(new CourseAccessGranted($enrollment));
            
            Log::info('Course access notification sent successfully');
        } catch (\Exception $e) {
            Log::error('Failed to send course access notification: ' . $e->getMessage(), [
                'enrollment_id' => $enrollment->id,
                'error' => $e->getMessage()
            ]);
            throw $e;
        }
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