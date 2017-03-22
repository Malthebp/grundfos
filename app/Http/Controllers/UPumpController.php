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

    public function getAllUserPumps($id)
    {
        $userpumps = Upump::with('Pump')->where('user_id', $id)->get();

        return response()->json([
            'userpumps' => $userpumps
        ]);
    }

    public function attachUPump(Request $request)
    {
        $upumpid = $request->upumpid;
        $upump = Upump::find($upumpid);
        $upump->client_id = $request->clientid;
        $upump->save();

        return response()->json([
                'message' => 'Pump added',
                'pumpid' => $upump,
                'clientid' => $request->clientid
            ]);
    }
}
