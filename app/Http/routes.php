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



Route::get('/infograficos', function () {
    return view('infograficos.infograficos');
});

Route::get('/videos', 'VdController@index');
 
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

//contatos

Route::post('mensagem', 'MenController@store');

Route::post('news', 'News@store');

//fim do contatos

Route::get('/postagem/{id}','PostController@show');

// Painel (ADMIN)
Route::group(['middleware' => 'auth' ], function() 
{
    Route::get('home', function () {
        return view('home');
    });
    Route::get('cadastrar', 'PostController@create');
    Route::post('cadastrar', 'PostController@store');
    Route::get('postagem/{id}/editar', 'PostController@edit');
    Route::post('postagem/{id}/editar', 'PostController@update');
// video
    Route::get('editarvideo', 'VdController@lista');
    Route::get('cadastrarvideo', 'VdController@create');
    Route::post('cadastrarvideo', 'VdController@store');
    Route::get('video/{id}/editar', 'VdController@edit');
    Route::post('video/{id}/editar', 'VdController@update');

     
});
