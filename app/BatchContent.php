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
        return $this->progress()->where('userId', $userId)->first();
    } 

}
