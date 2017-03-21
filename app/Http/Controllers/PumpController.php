<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pump;

class PumpController extends Controller
{
	public function getPump($id) {
		//$pumps = DB::table('pumps')->where('id', $id)->get();
		$pump = Pump::find($id);
		//return view('pump/pump', ['pumps' => $pumps]);
		return view('pump/pump')->with('pump',$pump);
		//return json_decode($pumps);
		//return var_dump($pumps);
	}
}