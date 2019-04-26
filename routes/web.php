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
Route::middleware(['auth'])->group( function ()
{

    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('categories','categoriesController');
    Route::resource('Tags','TagsController');
    Route::resource('post','postController')->middleware('VerifyCategoriesCount');
    Route::get('trashed-post','postController@trashed')->name('trashed-post');
    Route::put('restore-post/{Post}','postController@restore')->name('restore-post');


});
