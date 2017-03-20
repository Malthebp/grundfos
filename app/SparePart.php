<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Issue;
use App\PumpTool;

class SparePart extends Model
{
    public function issue()
    {
    	$this->hasMany(Issue::class);
    } 

    public function pumptool()
    {
    	$this->hasMany(PumpTool::class);
    }   


}
