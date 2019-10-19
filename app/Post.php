<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    public function path()      //could be named as you would like
    {
        return url("/posts/{$this->id}-" . Str::slug($this->title));
    }
}
