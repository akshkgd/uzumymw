<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BatchSection extends Model
{
    protected $fillable = ['name', 'batchId', 'order'];
    
    public function chapters(){
        return $this->hasMany('App\BatchContent', 'sectionId', 'id')->orderBy('order');
    }
}
