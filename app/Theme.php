<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    public function evaluations()
    {
        return $this->hasMany('App\Evaluation');
    }
}
