<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\CourseEnrollment;
use App\CourseProgress;
use App\BatchContent;

class UpdateBatchProgressJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $batchId;

    public function __construct($batchId)
    {
        $this->batchId = $batchId;
    }

    public function handle()
    {
        $enrollments = CourseEnrollment::where('batchId', $this->batchId)
            ->where('hasPaid', 1)
            ->get();

        // Get total number of videos in the batch
        $totalVideos = BatchContent::where('batchId', $this->batchId)
            ->where('type', 2) // Assuming 2 is video type
            ->count();

        foreach ($enrollments as $enrollment) {
            // Get all progress records for this user in this batch
            $progressRecords = CourseProgress::where('userId', $enrollment->userId)
                ->where('batchId', $this->batchId)
                ->get();

            if ($progressRecords->isNotEmpty()) {
                // Calculate total time spent
                $totalTimeSpent = $progressRecords->sum('timeSpent');

                // Calculate progress percentage based on completed videos
                $completedVideos = $progressRecords->where('status', 1)->count();
                $progressPercentage = $totalVideos > 0 
                    ? round(($completedVideos / $totalVideos) * 100, 2) 
                    : 0;

                // Update enrollment record
                $enrollment->time_spent = $totalTimeSpent;
                $enrollment->progress = $progressPercentage;
                $enrollment->save();
            }
        }
    }
} 