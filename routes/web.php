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
    // return view('welcome');
    return view('index');
});

Route::get('/event/{city}/{year}/{month}', "EventController@event");

// Route::get('/login/{city}/{year}/{month}', "LoginController@index");


Route::get('/member/', "MemberController@index");

Route::get('/management', "ManagementController@index");

Route::get('/simulate', "SimulateController@index");
Route::get('/UI', "UIController@index");
Route::get('/login', "LoginController@index");