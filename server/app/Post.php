<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Post extends Model
{
    use Searchable;

    public function user()
    {
        $this->hasOne('App\User');
    }

    public function shouldBeSearchable()
    {
        return $this->isPublished();
    }
}
