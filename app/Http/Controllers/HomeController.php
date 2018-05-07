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
        return view('home',['menu' => json_encode($menu)]);
    }
}
