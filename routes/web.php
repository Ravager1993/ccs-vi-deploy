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

Route::get('/student', 'StudentController@index');

Route::post('/studentSubmit', 'StudentController@submit');

Route::get('/counter', 'CounterController@index');

Route::post('/submitCounter', 'CounterController@submit');

Route::get('/maintenance', 'MaintenanceController@index');

Route::get('/dailystat', 'StatisticController@daily');

Route::get('/weeklystat', 'StatisticController@weekly');

Route::get('/monthlystat', 'StatisticController@monthly');
