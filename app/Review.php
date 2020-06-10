<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['title','content','users_id', 'created_at'];

    
    public function user() {

        return $this->belongsTo(User::class, 'users_id');

    }

}


