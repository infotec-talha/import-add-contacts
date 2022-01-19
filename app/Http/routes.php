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
})->name('home');

Route::group(['prefix' => 'do'], function (){
    
Route::get('/greet', function () {
    return view('actions.greet');
})->name('greet');

Route::get('/hug', function () {
    return view('actions.hug');
})->name('hug');

Route::get('/kiss', function () {
    return view('actions.kiss');
})->name('kiss');

Route::post('/benice', function (\Illuminate\Http\Request $request){
    if(isset($request['action']) && $request['name']){
        if(strlen($request['name'])> 0)
        {
            return view('actions.nice',['action' => $request['action'],'name' => $request['name']]);
        }
        return redirect()->back();
    }
    return redirect()->back();
})->name('benice');
});

Route::get('/pokemon', function () {
    return view('actions.pokemon');
})->name('pokemon');

Route::get('/signup-poke', function () {
    return view('actions.signup-poke');
})->name('signup-poke');

Route::get('/poke_pass_rest', function () {
    return view('actions.poke_pass_rest');
})->name('poke_pass_rest');

Route::post('/pokemon','PokemonController@authenticate')->name('authenticate');

Route::post('/poke_pass_rest','PokePassController@reset_password')->name('reset_password');


