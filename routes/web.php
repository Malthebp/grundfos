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

Route::get('/logout', function() {
	Auth::logout();
});
Route::group(['middleware' => ['auth']], function () {
    Route::get('/index', function () {
	    return view('index');
	});

	Route::get('/back', 'GeneralController@redirectBack');

	//Create new pump
	Route::get('/newpump', 'NewPumpController@index');
	Route::post('/newpump/create', 'NewPumpController@store');

	//Userpumps
	Route::get('/userpump/{id}', 'UPumpController@getPump');
	Route::get('/userpumps/getall/{id}', 'UPumpController@getAllUpumpsfromUser');


	//New client
	Route::get('/newclient', 'NewClientController@newClient');
	Route::post('/newclient/create', 'NewClientController@store');

	//Clients
	Route::get('/client/{id}', 'ClientController@index');
	Route::get('/client/get/{id}', 'ClientController@getClient');
	Route::patch('/client/update/{id}', 'ClientController@update');
	Route::get('/client/delete/{id}', 'ClientController@delete');
	Route::post('/client/upump/attach', 'UPumpController@attachUPump');

	//Clientpage
	Route::get('/client({id}', 'ClientController@index');

	Route::get('/catalogue', 'CatalogueController@index');

	Route::get('/pump/{id}', 'PumpController@getPump');

	Route::get('/catalogue/{id}', 'CatalogueController@getCategory');

});




// Route::get('/pumpcreate', 'PumpController@createPumps');
// Route::get('/pumps', 'PumpController@getPumps');
// Route::post('/pumpcreate/store', 'PumpController@store');




/*
Route::get('/catalogue', function () {
    return view('catalogue');
});
*/

Route::get('/home', 'HomeController@index');
