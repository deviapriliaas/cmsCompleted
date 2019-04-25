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
Route::resource('categories','categoriesController');
Route::resource('post','postController');
Route::get('trashed-post','postController@trashed')->name('trashed-post');
Route::put('restore-post/{Post}','postController@restore')->name('restore-post');
