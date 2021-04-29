<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Course;

class Batch extends Model
{
    Protected $dates = ['date', 'startDate', 'created_at'];


    public function teacher(){

        return $this->belongsTo('App\User', 'teacherId', 'id');
    }


    public function course(){

        return $this->belongsTo('App\Course', 'courseId', 'id');
    }

    public function test(){
        return $this->hasOne('App\User', 'id', 'teacherId');
    }
    public function enrollments(){
        return $this->hasMany('App\CourseEnrollment', 'batchId', 'id');
    }
}
