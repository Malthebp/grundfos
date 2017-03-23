<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upump;
use App\Pump;
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

  public function update(Request $request, $id)
    {
        $upump = Upump::findOrFail($id);

        $upump->update([
                'name' => $request->input('name'),
                'year' => $request->input('year'),
                'pumpAddress' => $request->input('address'),
                'description' => $request->input('description'),
            ]);

        return response()->json([
                'upump' => $upump,
                'message' => 'Successfully updated'
            ]);
    }


    public function delete($id)
    {
        $upump = Upump::findOrFail($id);
        $upump->delete();
        return redirect('/index');
    }

    public function getUpump($id)
    {
        $pump = Upump::with('Pump')->find($id);

        return response()->json([
            "upump" => $pump 
            ]);
    }
}
