<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('categories', 'CategoriesController');

Route::resource('tags', 'TagsController');

Route::resource('posts', 'PostController')->middleware('auth');

Route::get('trash-post', 'PostController@trash')->name('trashed-posts.index');

Route::put('restore-post/{post}', 'PostController@restore')->name('restore-posts');

Route::put('users', 'UserController@index')->name('user-list');
