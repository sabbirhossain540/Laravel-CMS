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

Route::get('/', 'WelcomeController@index')->name('welcome.index');
Route::get('/singlePost/{post}', 'WelcomeController@show')->name('welcome.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('categories', 'CategoriesController');

Route::resource('tags', 'TagsController');

Route::resource('posts', 'PostController')->middleware('auth');

Route::get('trash-post', 'PostController@trash')->name('trashed-posts.index');

Route::put('restore-post/{post}', 'PostController@restore')->name('restore-posts');




Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('users', 'UserController@index')->name('users.index');
    Route::POST('users/{id}/make-admin', 'UserController@makeAdmin')->name('user.make-admin');
});
