<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    public function Post()
    {
        return $this->belongsTo(Post::class);
    }
}
