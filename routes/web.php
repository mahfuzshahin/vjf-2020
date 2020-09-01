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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/jobseeker-info', 'HomeController@jobseeker_info');
Route::get('/employer-info', 'HomeController@employer_info');
Route::resource('jobseeker','JobseekerController');
Route::resource('employer','EmployerController');