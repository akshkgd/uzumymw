<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Log\Events\MessageLogged;

class SendErrorLogMail implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  MessageLogged  $event
     * @return void
     */
    public function handle(MessageLogged $event)
    {
        // if ($event->level !== 'error' && $event->level !== 'critical') {
        //     return;
        // }
        // $context = isset($event->context) ? json_encode($event->context, JSON_PRETTY_PRINT) : 'No context';
        // $emailBody = "Laravel Production Error\n\n";
        // $emailBody .= "Level: " . strtoupper($event->level) . "\n";
        // $emailBody .= "Time: " . now()->format('Y-m-d H:i:s') . "\n\n";
        // $emailBody .= "Message:\n" . $event->message . "\n\n";
        // $emailBody .= "Context:\n" . $context . "\n\n";
        // $emailBody .= "URL: " . url()->current() . "\n";
        // $emailBody .= "IP: " . request()->ip() . "\n";
        // Mail::raw($emailBody, function ($mail) use ($event) {
        //     $mail->to([
        //         'akshkgd@gmail.com',
        //         'ashish.efslon@gmail.com',
        //         'rohanmehra224466@gmail.com',
        //     ])
        //     ->subject('🚨 Codekaro Production Error - ' . strtoupper($event->level))
        //     ->from('errors@codekaro.in', 'Codekaro Error Logger');
        // });
    }

    /**
     * Handle a job failure.
     *
     * @param  MessageLogged  $event
     * @param  \Throwable  $exception
     * @return void
     */
    public function failed(MessageLogged $event, $exception)
    {
        // Log the failure but don't send email to avoid infinite loop
        Log::channel('single')->error('Failed to send error email: ' . $exception->getMessage());
    }
}
