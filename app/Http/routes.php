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

//Test methods of My_task class
Route::get('test','My_task_controller@test_all');

Route::post('task/reverse','My_task_controller@reverse');
Route::post('task/palindrome','My_task_controller@is_palindrome');
Route::post('task/encrypt','My_task_controller@encrypt');
Route::post('task/decrypt','My_task_controller@decrypt');

Route::get('task','My_task_controller@index');