<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rezervacija extends Model
{
    protected $fillable=[
        'user_id','ime_kartice','marka_r','model_r','email_kartice','broj_kartice','exp_kartice','pin_kartice',
    ];
    use HasFactory;
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function products(){
        return $this->belongsToMany('App\Models\Auti');
    }
}
