<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{

    protected $fillable = ['reservationType','date', 'amount', 'users_id'];

    // protected $table = 'reservation';

    // protected $primaryKey = 'id';

    public function reservation() {
        return $this->hasMany('App\Reservation');
    }

}
