<?php

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');




// --------- G E R A L ---
    //Modelo de Rota -> 
    //Caso a VIEW encontra-se dentro de pasta, utilize o . (ponto) em vez de / (barra).
    Route::get('/', function () {
        return view('home');
    })->name('home');
// --------- M A G O ---
    Route::group(['prefix' => 'mago'],function (){
        //Rotas daqui começaram com "mago/"
    });

// --------- P A G I N A  A D M I N -------------
    Route::group(['middleware' => ['auth']],function (){
        //Rotas daqui só poderam ser acessadas com usuário logado.
    });
// ---------  M A G O  A C E S S  A D M I N--
    Route::group(['prefix' => 'mago','middleware' => ['auth']],function (){
        //Rotas daqui começaram com "mago/"
        //Rotas daqui só poderam ser acessadas com usuário logado.
    });