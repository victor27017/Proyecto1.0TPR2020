<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matther extends Model
{

    public function themes()
    {
        return $this->hasMany('App\Theme');
    }
    //
}
