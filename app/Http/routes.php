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

Route::get('/admin', function(){
    return view('admin.home');
});

Route::get('/admin/add_user','front@add_user');
Route::get('/admin/add_teacher','front@add_teacher');
Route::get('/admin/add_student','front@add_student');
Route::post('/admin/modon','front@save_user');