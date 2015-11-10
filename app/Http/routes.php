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
//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Only connected users can see those resources

Route::resource('taches/taches','Taches\TachesController');

//Open resources for all visitor
Route::resource('tachesv/taches','TachesVisitor\TachesVisitorController');

Route::get('home', '\App\Http\Controllers\HomeController@index');
//Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


Route::get('backlog','BacklogController@show');
Route::get('project/new','ProjectController@show');
Route::get('project/add','ProjectController@add');
Route::get('backlog/userstory/create','UsController@create');
Route::get('backlog/userstory/modify/{idUs}','UsController@modify');
Route::post('backlog/userstory/create/confirm','UsController@createConfirm');
Route::post('backlog/userstory/modify/confirm','UsController@modifyConfirm');

Route::get('visitor/backlog/{id}','BacklogController@visitor');


// Suppression d'une User Story
Route::get('backlog/userstory/remove/{id}','UsController@remove');

// Page d'ajout d'un Sprint
Route::get('sprint/{project_id}/add/', 'SprintController@show');

Route::post('sprint/{project_id}/add/confirm', 'SprintController@add');

Route::get('sprint/{project_id}/edit/{sprint_id}', 'SprintController@edit');

Route::post('sprint/{project_id}/edit/{sprint_id}/confirm', 'SprintController@editConfirm');

//us to sprint
Route::get('AddUsToSprint/{idSprint}','UsSprintController@show');
Route::get('usSprint/add/{idUs}','UsSprintController@add');

Route::get('DeleteUsFromSprint/{idSprint}','UsSprintController@showSprint');
Route::get('usSprint/delete/{idUs}','UsSprintController@delete');


// Page d'ajout d'un Membre à un projet
Route::get('project/{project_id}/add', 'MemberController@show');
Route::post('project/{project_id}/add/confirm', 'MemberController@add');

Route::get('project/{project_id}/visitor', 'VisitorController@show');
Route::get('project/{project_id}/visitor/add', 'VisitorController@add');

//Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

//Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');
