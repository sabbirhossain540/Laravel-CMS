<?php

namespace App\Http\Controllers;
use App\Post;
use App\Category;
use App\Tag;

use Illuminate\Http\Request;


class WelcomeController extends Controller
{

    public function index(){
    	$search = request()->query('search');
    	if($search){
    		$posts = Post::where('title','LIKE',"%$search%" )->paginate(1);
    	}else{
    		$posts = Post::paginate(3);
    	}
    	return view('welcome')
    	->with('categories', Category::all())
    	->with('posts', $posts )
    	->with('tags', Tag::all());

    }

    //->with('posts', Post::all())    *** Retrive for All Post 


    public function show(Post $post){
    	return view('singlePost')->with('post', $post);
    }


    public function categoryWisePost(Category $category){
    	return view('categoryWisePost')->with('category', $category)->with('categories', Category::all())->with('tags', Tag::all())->with('posts', $category->posts()->paginate(2));
    }

    public function tagWisePost(Tag $tag){
    	return view('tagWisePost')->with('tags', $tag)->with('categories', Category::all())->with('tags', Tag::all())->with('posts', $tag->posts()->paginate(2));
    }
}
