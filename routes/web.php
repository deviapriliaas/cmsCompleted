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

Route::get('/','WelcomeController@welcome')->name('welcome');
Route::get('search','WelcomeController@search')->name('search');
Route::get('single/{post}','WelcomeController@single')->name('single');
Route::get('post/search','WelcomeController@search')->name('search');
Route::get('post/categories/{category}','WelcomeController@category')->name('find');
Route::get('post/tag/{id}','WelcomeController@tag')->name('post.tag');
Route::get('beranda/contact','WelcomeController@contact')->name('contact');
Route::get('beranda/galeri','WelcomeController@galeri')->name('galeri');
Route::get('beranda/about','WelcomeController@about')->name('about');

Route::get('beranda/post/{post}','pembaca\singlePostController@singlePost')->name('beranda.post');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::middleware(['auth','iklan'])->group(function(){
    Route::resource('create-profile','iklan\ProfileController');
    Route::resource('iklan','iklan\iklanController');
    Route::resource('pembayaran','iklan\pembayaranIklan');
    Route::get('datapembayaran','iklan\pembayaranIklan@datapembayaran')->name('datapembayaran');


});


Route::middleware(['auth','admin'])->group( function ()
{
    Route::get('users','UserController@index')->name('users');
    Route::resource('categories','categoriesController');
    Route::resource('Tags','TagsController');
    Route::resource('post','postController')->middleware('VerifyCategoriesCount');
    Route::get('trashed-post','postController@trashed')->name('trashed-post');
    Route::put('restore-post/{Post}','postController@restore')->name('restore-post');
    Route::post('users/{user}/make-admin','UserController@makeadmin')->name('users.users.make-admin');
    Route::get('users/edit-profil','UserController@editprofil')->name('users.edit-profil');
    Route::put('users/update-profil','UserController@updateprofil')->name('users.update');
    Route::resource('galeri','galeriController');
    
    
});


