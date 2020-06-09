<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['title','content','users_id'];


    // protected $table = 'reviews';

    // protected $primaryKey = 'id';
    
    public function user() {

        return $this->belongsTo(User::class, 'users_id');

    }

//     public function user()
// {
//     return $this->belongsTo(User::class)->withDefault([
//         'name' => 'Guest Author',
//     ]);
// }
}


