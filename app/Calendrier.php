<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendrier extends Model
{
    //
    public function medecin()
    {
        return $this->belongsTo('App\Medecin');
    }
}
