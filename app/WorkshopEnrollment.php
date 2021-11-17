<?php

namespace App;
use App\Workshop;

use Illuminate\Database\Eloquent\Model;

class WorkshopEnrollment extends Model
{
    
    public function workshop(){

        return $this->belongsTo('App\Workshop', 'workshopId', 'id');
    }
    public function student(){

        return $this->belongsTo('App\User', 'userId', 'id');
    }
}
