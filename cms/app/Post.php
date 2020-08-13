<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
    	'name', 'description', 'content', 'image', 'published_at'
    ];
}
