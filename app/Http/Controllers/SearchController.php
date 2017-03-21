<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
	$search = '%'.$_POST['search'].'%';

	$clients = DB::table('clients')
	->where('name', 'LIKE', $search)
	->orwhere('phone', 'LIKE', $search)
	->orwhere('email', 'LIKE', $search)
	->orwhere('description', 'LIKE', $search);
	->get();
}
