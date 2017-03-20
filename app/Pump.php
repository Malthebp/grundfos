<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\UserPump;
use App\Issue;
use App\SparePart;

class Pump extends Model
{

    public function category()
    {
    	$this->belongsTo(Category::class);
    }

    public function userpump()
    {
        $this->hasMany(UserPump::class);
    }

    public function issue()
    {
        $this->hasMany(Issue::class);
    }

    public function sparepart()
    {
        $this->hasMany(SparePart::class);
    }


}
