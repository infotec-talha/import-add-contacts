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



Route::get('/pokemon', 'PokemonController@getLoginPage')->name('getLoginPage');

Route::post('/pokemon','PokemonController@authenticate')->name('authenticate');

Route::get('/poke_pass_rest','PokemonController@resetPasswordPage')->name('resetPasswordPage');

Route::get('/signup-poke','PokemonController@signUpPage')->name('signUpPage');

Route::post('/poke_pass_rest','PokemonController@resetPassword')->name('resetPassword');

Route::post('/signup-poke','PokemonController@signUp')->name('signUp');

