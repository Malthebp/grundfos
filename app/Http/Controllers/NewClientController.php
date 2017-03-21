<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Client;

class NewClientController extends Controller
{
    public function newClient()
    {
    	return view('client.newclient');
    }

    public function store(Request $request)
    {
    	$client = Client::create([
    			'name' => $request->input('name'),
    			'phone' => str_replace(' ', '', $request->input('phone')),
    			'email' => $request->input('email'),
    			'user_id' => Auth::id(),
    			'address' => $request->input('address'),
    			'description' => $request->input('description'),
    		]);
    	
    	$clientid = $client->id;
    	return redirect('/client/'.$clientid);
    }
}
