<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BatchSection extends Model
{
    public function chapters(){
        return $this->hasMany('App\BatchContent', 'sectionId', 'id')->orderBy('order');
    }
}
