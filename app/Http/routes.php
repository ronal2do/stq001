<?php

Route::get('/', ['as' => 'welcome', function(){
    return view('welcome');
}]);

Route::get('saude', 'SaudeController@index');

Route::get('educacao', 'EspController@index');

Route::get('/infraestrutura', 'InfraController@index');

Route::get('/cidadania', 'CidadaniaController@index');

Route::get('/meioambiente', 'MeioController@index');

Route::get('/esporte', 'EsporteController@index');

Route::get('#realizacoes', function () {
    return redirect('/') . '#realizacoes';
});

 
Route::get('/contato', function () {
    return view('contato.contato');
});

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', ['as' => 'logout', function(){
    Auth::logout();
    return redirect('/');
}]);

Route::get('/postagem', function () {
    return redirect('/');
});

Route::get('cadastrar', 'PostController@create');
Route::post('cadastrar', 'PostController@store');

//contatos

Route::post('mensagem', 'MenController@store');
Route::get('nvideos', 'VdsController@index');
Route::post('_video/{id}', 'VdController@show');

Route::post('news', 'News@store');

//fim do contatos

Route::get('/postagem/{id}','PostController@show');

// Painel (ADMIN)
Route::group(['middleware' => 'auth' ], function() 
{
    Route::get('home', function () {
        return view('home');
    });
    Route::get('artigos', 'PostController@index');
    Route::get('postagem/{id}/editar', 'PostController@edit');
    Route::post('postagem/{id}/editar', 'PostController@update');
    Route::get('postagem/{id}/deletar', 'PostController@destroy');
    Route::post('postagem/{id}/deletar', 'PostController@destroy');
// video
    
});

Route::get('email', function(){
    
    Mail::raw('Mensagem de teste', function($m){
        $m->from('us@example.com', 'Laravel')->to('faq@sotaquepropaganda.com.br','Sotaque')->subject('#SomosSBC - Nova mensagem');
        
    });

});


