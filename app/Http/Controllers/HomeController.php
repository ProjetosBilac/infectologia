<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $menu = [
            [
                'name'=> 'Home',
                'url' => route('home'),
            ],
            [
                'name'=> 'Admin',
                'url' => route('admin'),
            ],
            [
                'name'=> 'Avaliação',
                'url' => route('evaluation'),
            ],
        ];
        $exams = \App\Exam::where('user_id',\Auth::User()->id)->where('completed_at','!=',null)->orderBy('completed_at','desc')->get();
        return view('home',['menu' => json_encode($menu),'exams' => $exams]);
    }

    public function teste(Request $request){
        dd($request,$request->all());
    }
}
