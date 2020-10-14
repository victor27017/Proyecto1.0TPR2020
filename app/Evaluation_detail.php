<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation_detail extends Model
{
    public function evaluation_details()
    {
        return $this->hasMany('App\Evaluation_detail');
    }
}
