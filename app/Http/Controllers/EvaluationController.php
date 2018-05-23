<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class EvaluationController extends Controller
{
    public function index(){
        $inputs = \App\Input::where('status',1)->inRandomOrder()->take(20)->get();
        $exam = new \App\Exam;
        $exam->user_id = Auth::user()->id;
        $exam->save();
        $exam->inputs()->sync($inputs->pluck('id')->toArray());
        $evaluation = \App\Exam::where('id',$exam->id)->with('inputs.options')->first();
        //{{dd($evaluation)}}
        return view('evaluation.home',['evaluation' => $evaluation]);
    }
}
