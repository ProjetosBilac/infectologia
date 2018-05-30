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
        return view('evaluation.home',['evaluation' => $evaluation]);
    }



    public function identical_values( $arrayA , $arrayB ) {

        sort( $arrayA );
        sort( $arrayB );
    
        return $arrayA == $arrayB;
    } 
    
    private function removerDefaults($questions){
        if(isset($questions['_token'])){
            unset($questions['_token']);
        }
        if(isset($questions['form_id'])){
            unset($questions['form_id']);
        }
        return $questions;
    }

    private function arrayCorrect($bd_options){
        $options_correct = [];
        foreach($bd_options as $bd_option){
            if($bd_option->correct == 1){
                array_push($options_correct,$bd_option->id);
            }
        }
        return $options_correct;
    }
    
    private function questionCorrect($question,$id){
        //Pegando o ID da Questão do Array e passando o Primeiro Valor para a Variavel.
        $question_id = array_keys($question);
        $question_id = $question_id[$id];
        //Pegando a Questão relacionada do Banco de Dados
        $bd_input = \App\Input::with('options')->find($question_id);
        //Armazenando as Opções disponiveis dessa Questão.
        $user_options = $question[$question_id]['value'];
        //Obtendo um Array com os Id`s das questões corretas.
        $options_correct = $this->arrayCorrect($bd_input->options);
        //Verificação se os Arrays são identicos. Logo se a resposta do Usuario e a do Banco são as Mesmas.
        return $this->identical_values($user_options,$options_correct);

    }
    public function store(Request $request){
        $this->create($request);
        return redirect()->route('home');
    }

    public function create(Request $request){
        $exam_id = $request->input('form_id');
        $questions = $request->all();
        //Armazenando as Questões respondidas
        $questions = $this->removerDefaults($questions);
        $acertos = 0;
        for($i=0; $i < count($questions['alternativa']);$i++){
            //Verificação se as questoes respondidas batem com as do Banco de Dados.
            if($this->questionCorrect($questions['alternativa'],$i)){
                $acertos++;
            }
        }
        //Criando a Nota de acordo com a Qnt Acertos / Qnt Perguntas
        $nota = (($acertos / count($questions['alternativa'])) *10);
        //Adicionando Casas decimais a nota. não podendo ter mais que 2 casas após a virgula.
        $nota_decimal = number_format($nota, 2, '.', '');
        //Modelo Exame, Atualizando dados.
        $exam = \App\Exam::find($exam_id);
        $exam->value = $nota_decimal;
        $exam->completed_at = now();
        $exam->save();
    }


}
