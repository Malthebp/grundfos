<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upump extends Model
{
    protected $fillable = ['model', 'description', 'imagepath', 'user_id', 'pump_id', 'year', 'pumpAddress'];
}
