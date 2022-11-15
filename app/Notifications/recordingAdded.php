<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class recordingAdded extends Notification implements ShouldQueue
{
    use Queueable;
    public $emailData;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($emailData)
    {
       $this->emailData = $emailData;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('New Recording Available')
                    ->greeting('Hi '. $this->emailData['name'])
                    ->line('New recording on '. $this->emailData['title'] .' is available now.')
                    ->action('Watch the recording now', url('/home'))
                    ->line('Make sure you attend all the upcoming sessions live for the best experience!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
