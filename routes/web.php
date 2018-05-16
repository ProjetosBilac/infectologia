<?php

Auth::routes();

//Todas as Rotas terão o Middleware Auth, no qual só permite usuarios autenticados.
Route::group(['middleware' => ['auth']],function (){
// --------- G E R A L --------
        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/', 'HomeController@index')->name('home');
// --------- P A G I N A   A D M I N -------------
    //'role:Admin'
    Route::group(['prefix' => 'admin'],function (){
        //Rotas daqui só poderam ser acessadas com usuário logado.
        Route::get('/', 'AdminController@index')->name('admin');
        Route::get('/evaluation', 'AdminController@evaluation')->name('admin.evaluation');
    });
// ---------  A V A L I A Ç Ã O   A C E S S --
    Route::group(['prefix' => 'evaluation'],function (){
        Route::get('/', 'EvaluationController@index')->name('evaluation');
    });
});


Route::get('/teste', 'HomeController@teste')->name('teste');