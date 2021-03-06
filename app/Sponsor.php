<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    // entity relation 
    public function apartments() {
        return $this->belongsToMany('App\Apartment');
    }
}
