<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pump;
use App\PumpTool;
use App\SparePart;

class Issue extends Model
{
    public function pump()
    {
    	$this->hasMany(Pump::class);
    }

    public function pumptool()
    {
    	$this->hasMany(PumpTool::class);
    }

	public function sparepart()
    {
    	$this->hasMany(SparePart::class);
    }    
}
