<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{

    public function personne(){
        return $this->hasOne('App\Personne','id','personne_id');
    }
    public function rdvs(){
        return $this->hasMany('App\Rdv');

    }
}
