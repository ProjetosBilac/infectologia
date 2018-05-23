<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
    public function options()
    {
        return $this->hasMany('App\Option');
    }
}
