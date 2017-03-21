<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pump;

class Issue extends Model
{
    public function pump () {
    	return $this->hasMany('App\Pump');
    }
}
