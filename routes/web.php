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


Route::get('/back', 'GeneralController@redirectBack');

// Route::get('/pumpcreate', 'PumpController@createPumps');
// Route::get('/pumps', 'PumpController@getPumps');
// Route::post('/pumpcreate/store', 'PumpController@store');

//Create new pump
Route::get('/newpump', 'NewPumpController@index');
Route::post('/newpump/create', 'NewPumpController@store');

//pumppage
Route::get('/userpump/{id}', 'UPumpController@getPump');


//New client
Route::get('/newclient', 'NewClientController@newClient');
Route::post('/newclient/create', 'NewClientController@store');

//Clientpage
Route::get('/client({id}', 'ClientController@index');

Route::get('/catalogue', 'CatalogueController@index');

Route::get('/catalogue/{id}', 'CatalogueController@getCategory');

/*
Route::get('/catalogue', function () {
    return view('catalogue');
});
*/

Route::get('/home', 'HomeController@index');
