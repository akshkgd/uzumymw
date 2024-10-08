<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseProgress extends Model
{
    protected $fillable = [
        'userId',
        'batchId',
        'contentId',
        'visited',
        'timeSpent',
        'progress',
        'firstAccess',
        'lastAccess',
        'status'
    ];
    Protected $dates = ['firstAccess', 'lastAccess'];
    public function batch(){

        return $this->belongsTo ('App\Batch', 'batchId', 'id');
    }
    public function students(){

        return $this->belongsTo ('App\User', 'userId', 'id');
    }
    public function content(){

        return $this->belongsTo ('App\BatchContent', 'contentId', 'id');
    }
}
