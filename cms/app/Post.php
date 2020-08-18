<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
	use SoftDeletes;
    protected $fillable = ['title', 'description', 'content', 'published_at', 'image', 'category_id'];

	/**
     * Remove the specified resource from storage.
     *
     * 
     * @return void
     */
    public function deleteImage(){
    	Storage::delete($this->image);
    }

    public function category(){
    	return $this->belongsTo(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}

