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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//Route::get('/', 'IndexController@show')->name('index');
Route::get('/', 'IndexController@show')->name('index');
//Route::get('/profile', 'ProfileController@show')->name('profile');

Route::match(['get','post'],'/profile/{id?}', ['uses'=>'ProfileController@show','as'=>'profile']);

Route::get('/home', 'IndexController@home')->name('home');
//Route::get('/', 'HomeController@index');

//Route::get('login/gmail', 'Auth\LoginController@redirectToProvider');
//Route::get('login/gmail/callback', 'Auth\LoginController@handleProviderCallback');

//facebook socialite

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
