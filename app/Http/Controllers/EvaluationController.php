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


    private function removerDefaults($ids){
        if(isset($ids['_token'])){
            unset($ids['_token']);
        }
        return $ids;
    }

    public function store(Request $request){
        //Validation
        $questions = $request->all();
        $questions = $this->removerDefaults($questions);
        //dd($request->all(),$questions,$request->input('alternativa')[$questions[0]]['value']);
        foreach($questions as $question){
            //Pegando o ID da Questão do Array e passando o Primeiro Valor para a Variavel.
            $question_id = array_keys($question);
            $question_id = $question_id[0];
            $options = $question[$question_id]['value'];

            $input = \App\Input::with('options')->find($question_id);
            $bd_options = $input->options;
            $options_correct = [];
            foreach($bd_options as $bd_option){
                if($bd_option->correct == 1){
                    array_push($options_correct,$bd_option->id);
                }
            }
            if(count($options) == count($options_correct)){
                
            }else{
                
            }
            dd($options,$options_correct);
            $correct =  false;
        
        }
        exit(0);
        $this->create($request);
        return redirect()->route('home');
            
    }

    public function create(Request $request){

    }
}
