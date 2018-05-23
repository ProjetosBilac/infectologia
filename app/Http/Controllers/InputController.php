<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InputController extends Controller
{
    
    protected function validator(array $data){
        return Validator::make($data, [
            //Informações Pessoais
            'enunciado' => 'required|string|max:400',
            'alternativa.*.enunciado' => 'required|string|max:200',
            'type_id' => 'required|exists:types,id',
            //'alternativa.*.value' => [
            //    'required',
            //    Rule::in(['true', 'false','on','false']),
            //],
        ]);
    }

    public function store(Request $request){
        $validator = $this->validator($request->all());
        if ($validator->fails()) {
            $errors = $validator->errors();
            dd($errors,$request->all());
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        $this->create($request);
        return back();
    }

    public function create($request){
        $input = new \App\Input;
        $input->question = $request->input('enunciado');
        $input->type_id = $request->input('type_id');
        $input->save();
        foreach($request->input('alternativa') as $value){
            $option = new \App\Option;
            $option->name = $value['enunciado'];
            $option->correct = (isset($value['value']) and ($value['value'] == true or $value['value'] == on)) ? true : false ;
            $option->input_id = $input->id;
            $option->save();
        }
    }
}
