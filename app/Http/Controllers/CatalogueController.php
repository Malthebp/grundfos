<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Pump;

class CatalogueController extends Controller
{

    public function index() {
    	$categories = DB::table('categories')->get();
    	return view('catalogue', ['categories' => $categories]);
    }

    public function getCategory($id){

    	$category = Category::with('Pump')->where('id', $id)->get();


    	return view ('catalogue/category', ['category' => $category]);
    	 //return json_decode($category);
    }
}
