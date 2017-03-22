<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Upump;
class ClientController extends Controller
{
    public function index($id)
    {
    	$client = Client::findOrFail($id);
    	return view('client.clientpage')->with('client', $client);
    }

    public function getClient($id)
    {
    	$client = Client::findOrFail($id);
    	return response()->json([
    		'client' => $client
    	]);
    }


    public function update(Request $request, $id)
    {
    	$client = Client::findOrFail($id);

    	$client->update([
    			'name' => $request->input('name'),
    			'phone' => str_replace(' ', '', $request->input('phone')),
    			'email' => $request->input('email'),
    			'address' => $request->input('address'),
    			'description' => $request->input('description'),
    		]);

    	return response()->json([
    			'client' => $client,
    			'message' => 'Successfully updated'
    		]);
    }


    public function delete($id)
    {
    	$client = Client::findOrFail($id);
    	$client->delete();
    	return redirect('/index');
    }
}
