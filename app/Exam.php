<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $dates = ['completed_at'];

    public function inputs()
    {
        return $this->belongsToMany('App\Input', 'exam_inputs', 'exam_id', 'input_id');
    }
}
