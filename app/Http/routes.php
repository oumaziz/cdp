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
    return view('welcome');
});

<<<<<<< HEAD


Route::resource('taches/taches','Taches\TachesController');
=======
Route::get('backlog','BacklogController@show');
Route::get('backlog/create','UsController@create');
Route::get('backlog/modify/{idUs}','UsController@modify');
>>>>>>> d6fd32dc4dc6206a75a2054c16989db95c75e71e
