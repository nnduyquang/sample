<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title', 'content', 'isPost','user_id'
    ];
    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
