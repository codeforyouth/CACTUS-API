<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//projects
Route::get  ('/projects',              'ProjectController@index');
Route::post  ('/projects',              'ProjectController@store');
Route::get  ('/projects/{project_id}', 'ProjectController@show' );

Route::get  ('/problems/{problem_id}', 'ProblemController@show' );

Route::get  ('/tags/{tag_name}', 'TagController@show');

