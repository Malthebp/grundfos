<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Pump extends Model
{
    public function category() {
    	return $this->belongsTo('App\Category');
    }

    public function issue() {
    	return $this->belongsToMany('App\Issue');
    }

    public function tool() {
    	return $this->belongsToMany('App\Tool');
    }
    public function Part() {
    	return $this->belongsToMany('App\Part');
    }
}
