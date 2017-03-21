<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Pump extends Model
{
    public function category() {
    	return $this->belongsTo('App\Category');
    }

<<<<<<< HEAD
    public function upump()
    {
    	return $this->hasMany('App\Upump');
=======
    public function issue() {
    	return $this->belongsToMany('App\Issue');
    }

    public function tool() {
    	return $this->belongsToMany('App\Tool');
    }
    public function Part() {
    	return $this->belongsToMany('App\Part');
>>>>>>> 89a88bca354c861fc3cfeb62336140711c924668
    }
}
