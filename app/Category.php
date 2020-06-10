<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function time() {
        
        return $this->hasMany(Time::class);
        
    }
}
