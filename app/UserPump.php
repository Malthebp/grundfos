X<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Client;
use App\Pump;

class UserPump extends Model
{
    public function user()
    {
    	$this->belongsTo(User::class);
    }

    public function client()
    {
    	$this->belongsTo(Client::class);
    }

    public function pump()
    {
    	$this->belongsTo(Pump::class);
    }
}
