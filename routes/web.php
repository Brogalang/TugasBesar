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
Route::get('index', function () {
    return view('index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profil', 'fotosController@index');
Route::post('/profil', 'fotosController@insert');
// Route::resource('konsultan', 'KonsultanController');
Route::resource('konsultan', 'HomeController');
// Route::get('/galeri', 'galeriController@galeri'); 

Route::get('posts', 'HomeController@posts')->name('posts');
Route::post('posts', 'HomeController@postPost')->name('posts.post');
Route::get('posts/{id}', 'HomeController@show')->name('posts.show');