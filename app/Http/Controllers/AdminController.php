<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    

    public function index(){
        $inputs = \App\Input::all();
        return view('admin.home',['inputs' => $inputs]);
    }
    
    public function evaluation(){
        return view('admin.evaluation',[]);
    }
}
