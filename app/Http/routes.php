<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
  Route::get('/login', function(){
    return view('admin.login');
  });
  Route::get('/passwort-vergessen', function(){
    return view('admin.forgotpassword');
  });
  //Route::group(['middleware'=> 'auth'], function(){
    Route::get('/dashboard', function(){
        return view('admin.dashboard');
    });
    Route::resource('events', 'EventsController');
    Route::resource('sliders', 'SlidersController');
    Route::resource('galleries', 'GalleriesController');
    Route::resource('pages', 'PagesController');
    Route::resource('menues', 'MenuesController');
//  });
});
