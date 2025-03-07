<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TingkatEmergency extends Model
{
    protected $table = 'emergency_index';
    protected $fillable = ['kode_emergency'];
}
