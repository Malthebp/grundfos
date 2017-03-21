<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Upump;
use App\Pump;

class NewPumpController extends Controller
{
    public function index()
    {	
    	$models = Pump::all();
    	return view('newpump')->with('models', $models);
    }

    public function store(Request $request)
    {
    	$pump = Upump::create([
    			'description' => $request->input('alias'),
    			'pump_id' => $request->input('model'),
    			'year' => $request->input('year'),
    			'pumpAddress' => $request->input('pumpaddress'),
    			'user_id' => Auth::id(),
    			'model' => ' ',
    			'imagepath' => ' ',
    		]);
    	$pumpid = $pump->id;
    	return redirect('/userpump/'.$pumpid);
    }
}
