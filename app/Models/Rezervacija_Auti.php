<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rezervacija_Auti extends Model
{
    use HasFactory;
    protected $table='rezervacija_auti';
    protected $fillable=['rezervacija_id','auti_id',];
}
