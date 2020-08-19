<?php

namespace App\Http\Controllers;
use App\Post;
use App\Category;
use App\Tag;

use Illuminate\Http\Request;


class WelcomeController extends Controller
{
    public function index(){
    	return view('welcome')
    	->with('categories', Category::all())
    	->with('posts', Post::paginate(1))
    	->with('tags', Tag::all());

    }

    //->with('posts', Post::all())    *** Retrive for All Post 


    public function show(Post $post){
    	return view('singlePost')->with('post', $post);
    }
}
