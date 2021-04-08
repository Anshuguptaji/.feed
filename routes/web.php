<?php

Route::get('login', 'LoginController@index');
Route::post('/postLogin', 'LoginController@cekLogin');
Route::get('/logout', 'LoginController@logout');
Route::middleware('cekLogin')->group(function(){
    Route::view('me', 'me');
});