<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Upump;

class Client extends Model
{
    protected $fillable = ['name', 'phone', 'address', 'email', 'description', 'user_id'];


    public function upumps()
    {
    	return $this->hasMany(App\Upump::class);
    }
}
