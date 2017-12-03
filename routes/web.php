<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/jobs', 'JobController@index');
Route::get('/jobs/search', 'JobController@search');
Route::post('/jobs', 'JobController@create');

Route::get('/', function () {
    return view('welcome');
});
