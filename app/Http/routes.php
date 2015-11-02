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

Route::get('backlog','BacklogController@show');
Route::get('project/new','ProjectController@show');
Route::get('project/add','ProjectController@add');
Route::get('backlog/create','UsController@create');
Route::get('backlog/modify/{idUs}','UsController@modify');
