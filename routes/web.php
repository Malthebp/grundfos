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

Route::get('/index', function () {
    return view('index');
});

Route::get('/catalogue', function () {
    return view('catalogue');
});

Route::get('/pumpcreate', 'PumpController@createPumps');
Route::get('/pumps', 'PumpController@getPumps');
Route::post('/pumpcreate/store', 'PumpController@store');

Route::get('/home', 'HomeController@index');
