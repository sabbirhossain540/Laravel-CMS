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
    	->with('posts', Post::all())
    	->with('tags', Tag::all());

    }


    public function show(){
    	return view('singlePost');
    }
}
