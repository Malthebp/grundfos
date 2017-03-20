<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Category extends Model
{

    public function pumps()
    {
    	$this->hasMany(Pump::class);
    }

    

}
