<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('profile', function () {
    // Only verified users may enter...
    dd('here is your profile');
})->middleware('verified');

Route::get('/home', 'HomeController@index')->name('home');
