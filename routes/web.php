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
Route::get('/chat', 'ShowController@index');
Route::get('/usersdata', 'ShowController@show');
Route::get('/profile/{slug}', 'ProfileController@index');
Route::get('/profileData/{slug}', 'ProfileController@show');
Route::post('/profileUp/{id}', 'ProfileController@update');
Route::post('/postUpload', 'PostController@store');
Route::get('/posts', 'PostController@index');
Route::get('/ownposts/{id}', 'PostController@Userindex');
Route::post('/postUpdate/{id}', 'PostController@Update');
