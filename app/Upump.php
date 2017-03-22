<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Client;

class Upump extends Model
{
    protected $fillable = ['model', 'description', 'imagepath', 'user_id', 'pump_id', 'year', 'pumpAddress'];

    public function client()
    {
    	return $this->belongsTo('App\Client');
    }

    public function pump()
    {
    	return $this->belongsTo('App\Pump');
    }

    public function users()
    {
    	return $this->belongsTo('App\User');
    }
}
