<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;

class UserController extends Controller
{
    public function getUser()
    {	
    	$id = Auth::id();
    	$user = User::find($id);

    	return response()->json([
    		'user' => $user
    		]);
    }
}
