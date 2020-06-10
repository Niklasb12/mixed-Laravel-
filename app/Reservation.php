<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{

    protected $fillable = ['reservationType', 'time', 'date', 'amount', 'users_id'];


    public function user() {

        return $this->belongsTo(User::class, 'users_id');

    }

}
