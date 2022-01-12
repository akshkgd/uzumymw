<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    Protected $dates = ['date', 'created_at'];
    public function teacher(){

        return $this->belongsTo('App\User', 'teacherId', 'id');
    }

    public function student(){

        return $this->belongsTo('App\User', 'userId', 'id');
    }
}
