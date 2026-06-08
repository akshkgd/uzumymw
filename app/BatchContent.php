<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BatchContent extends Model
{
    public function progress()
    {
        return $this->hasMany(CourseProgress::class, 'contentId');
    }
    public function batch()
{
    return $this->belongsTo(Batch::class, 'batchId');
}
    // Method to get the progress of a specific user for this content
    public function userProgress($userId)
    {
        if ($this->relationLoaded('progress')) {
            $loadedProgress = $this->progress->first();
            if (is_null($loadedProgress) || $loadedProgress->userId == $userId) {
                return $loadedProgress;
            }
        }
        return $this->progress()->where('userId', $userId)->first();
    } 

}
