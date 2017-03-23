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
    return view('auth.login');
});


Auth::routes();

Route::get('/logout', function() {
	Auth::logout();
	return redirect('/');
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
	Route::get('/userpump/get/{id}', 'UPumpController@getUpump');
	Route::patch('/userpump/update/{id}', 'UPumpController@update');
	Route::get('/userpump/delete/{id}', 'UPumpController@delete');
	Route::post('/userpump/upump/attach', 'UPumpController@attachUPump');

	//New client
	Route::get('/newclient', 'NewClientController@newClient');
	Route::post('/newclient/create', 'NewClientController@store');

	//Clients
	Route::get('/client/{id}', 'ClientController@index');
	Route::get('/client/get/{id}', 'ClientController@getClient');
	Route::patch('/client/update/{id}', 'ClientController@update');
	Route::get('/client/delete/{id}', 'ClientController@delete');
	Route::post('/client/upump/attach', 'UPumpController@attachUPump');

	//Index 
	Route::get('/client/all/{id}', 'ClientController@getAllClients');
	Route::get('/userpumps/all/{id}', 'UPumpController@getAllUserPumps');

	//Clientpage
	Route::get('/client({id}', 'ClientController@index');

	Route::get('/catalogue', 'CatalogueController@index');

	Route::get('/pump/{id}', 'PumpController@getPump');

	Route::get('/catalogue/{id}', 'CatalogueController@getCategory');

	//User 
	Route::get('/user', 'UserController@getUser');
	//Issue
	Route::get('/issue', function(){
		return view('issue');
	});

	//Upgrade
	Route::get('/upgrade', function(){
		return view('upgrade');
	});

	//profile
	Route::get('/profile', function(){
		return view('profile');
	});

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
