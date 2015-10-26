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
    return view('devBestFriend.devBestFriend');
});

Route::get('/lorem', function () {
    return view('lorem.genlorem');
});

Route::post('/lorem', function () {
    return view('lorem.genlorem');
});

Route::get('/randomuser', function () {
    return view('randomuser.genrandomuser');
    echo App::environment();
});

Route::post('/randomuser', function () {
  return view('randomuser.genrandomuser');
    echo App::environment();
});
