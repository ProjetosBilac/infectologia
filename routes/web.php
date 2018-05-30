<?php

Auth::routes();

//Todas as Rotas terão o Middleware Auth, no qual só permite usuarios autenticados.
Route::group(['middleware' => ['auth']],function (){
// --------- G E R A L --------
        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/', 'HomeController@index')->name('home');
// --------- P A G I N A   A D M I N -------------
    //'role:Admin'
    Route::group(['prefix' => 'admin','middleware' => ['admin']],function (){
        //Rotas daqui só poderam ser acessadas com usuário logado.
        Route::get('/', 'AdminController@index')->name('admin');
        Route::get('/evaluation', 'AdminController@evaluation')->name('admin.evaluation');
        Route::post('/evaluation', 'InputController@store')->name('admin.evaluation.post');
        Route::get('/question/remover/{id}', 'InputController@remover')->name('admin.remover');
    });
// ---------  A V A L I A Ç Ã O   A C E S S --
    Route::group(['prefix' => 'evaluation'],function (){
        Route::post('/', 'EvaluationController@index')->name('evaluation');
        Route::post('/store', 'EvaluationController@store')->name('evaluation.store');
    });
});


Route::post('/teste', 'HomeController@teste')->name('teste');
