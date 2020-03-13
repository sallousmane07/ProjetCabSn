<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{
    public function personne(){
        return $this->hasOne('App\Personne','id','id');
    }
    public function services(){
        return $this->belongsToMany('App\Service');
    }
    public function calendriers()
    {
        return $this->hasMany('App\Calendrier');
    }
}
