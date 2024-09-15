<?php

namespace App\Jobs;

use App\Models\CourseEnrollment;
use App\Models\Batch;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

class SendLiveClassWhatsappReminder implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($enrollmentId, Batch $batch)
    {
        $this->enrollmentId = $enrollmentId;
        $this->batch = $batch;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $pabblyWebhookUrl = 'https://connect.pabbly.com/workflow/sendwebhookdata/IjU3NjUwNTY0MDYzMjA0MzQ1MjY0NTUzZDUxM2Ii_pc';
        $enrollment = CourseEnrollment::findOrFail($this->enrollmentId);
        $name = $enrollment->students->name;
        $email = $enrollment->students->email;
        $batchName = $enrollment->batch->name;
        $user = $enrollment->students;
        $topic = $this->batch->topic;
        $link = $this->batch->meetingLink;

        // Prepare the data to be sent to the webhook
        $data = [
            'firstName' => strtok($name, ' '),
            'email' => $email,
            'phone' => $user->mobile,
            'batchName' => $batchName,
            'link' => $link,
            'topic' => $topic,
        ];

        // Send the data to the Pabbly webhook
        $response = Http::post($pabblyWebhookUrl, $data);

        // Optional: handle the response if needed
        if ($response->failed()) {
            // Handle the error, log it or retry if needed
        }
    }
}
