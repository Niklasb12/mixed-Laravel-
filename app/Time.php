<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    public function category() {

        return $this->belongsTo(Category::class, 'category_id');

    }
}
