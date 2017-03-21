<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upump;
use App\User;

class UPumpController extends Controller
{
    public function getPump ($id)
    {
    	$pump = Upump::find($id);
    	return view('pumppage')->with('pump', $pump);
    	// return var_dump($pump->description);
    }

    public function getAllUpumpsfromUser($id)
    {
    	$pumps = User::find($id)->upumps()->get();

    	return response()->json([
    			'upumps' => $pumps
    		]);
    }
}
