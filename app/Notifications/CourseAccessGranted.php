<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Crypt;

class CourseAccessGranted extends Notification implements ShouldQueue
{
    use Queueable;

    protected $enrollment;

    public function __construct($enrollment)
    {
        $this->enrollment = $enrollment;
    }

    public function via($notifiable)
    {
        return ['mail', 'database']; // Sends both email and database notification
    }

    public function toMail($notifiable)
    {
        $url = route('recordings', ['id' => Crypt::encrypt($this->enrollment->id)]); // Define this route

        return (new MailMessage)
            ->subject('Access Granted for ' . $this->enrollment->batch->name)
            ->greeting('Hello ' . strtok($notifiable->name, ' ') . '!')
            ->line('Thank you for enrolling in ' . $this->enrollment->batch->name .' 🎉')
            ->line('Your payment has been confirmed and your course access has been granted.')
            ->action('Access Your Course', $url)
            ->line('If you have any questions or need assistance, please don\'t hesitate to reach out to our support team.');
    }

    public function toArray($notifiable)
    {
        return [
            'message' => 'Course access granted for ' . $this->enrollment->batch->name,
            'enrollment_id' => $this->enrollment->id,
            'batch_id' => $this->enrollment->batchId,
            'batch_name' => $this->enrollment->batch->name,
        ];
    }
} 