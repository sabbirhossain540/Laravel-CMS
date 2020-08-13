<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
	use SoftDeletes;
    protected $fillable = ['title', 'description', 'content', 'published_at', 'image'];

	/**
     * Remove the specified resource from storage.
     *
     * 
     * @return void
     */
    public function deleteImage(){
    	Storage::delete($this->image);
    }
}

