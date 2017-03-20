<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Issue;
use App\SparePart;

class PumpTool extends Model
{
    public function issue()
    {
    	$this->hasMany(Issue::class);
    }
    
    public function sparepart()
    {
    	$this->hasMany(SparePart::class);
    }   
}
