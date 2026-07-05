<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeatureRequest extends Model
{
    protected $table = 'feature_requests';

    protected $fillable = ['userId', 'text', 'status'];

    public function user()
    {
        return $this->belongsTo('App\User', 'userId', 'id');
    }
}
