<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable =['NAME','EMAIL','DOCTOR','TIMING','DESCRIPTION'];
    protected $table='Appointment';
}
