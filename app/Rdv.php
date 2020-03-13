<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
    // je ne sais pas qui a mis ça entre moi et mouhamed;
    public function services()
    {
        return $this->hasOne('App\Service');
    }
    //fin


    public function service(){
        return $this->belongsTo('App\Service');
    }
    public function patient(){
        return $this->belongsTo('App\Patient');
    }
}
