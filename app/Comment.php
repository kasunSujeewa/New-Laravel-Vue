<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $with = ['user', 'post'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
