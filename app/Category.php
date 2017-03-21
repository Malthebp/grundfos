<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pump;

class Category extends Model
{
    public function pump () {
    	return $this->belongsToMany('App\Pump');
    }
}
