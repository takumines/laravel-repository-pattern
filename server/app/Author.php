<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public $timestamps = false;

    public function book()
    {
        return $this->hasMany('App\Book');
    }
}
