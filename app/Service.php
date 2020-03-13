<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    public function medecins(){
        return $this->belongsToMany('App\Medecin','medecin_service');
    }
    public function rdvs(){
        return $this->hasMany('App\Rdv');

    }
    public function actes(){
        return $this->hasMany('App\Acte');

    }
}
