<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    public function user(){

        return $this->belongsTo ('App\User', 'userId', 'id');
    }
}
