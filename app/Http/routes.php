<?php

Route::get('/', 'PostController@index');

Route::get('saude', 'SaudeController@index');

Route::get('educacao', 'EspController@index');

Route::get('/infraestrutura', 'InfraController@index');

Route::get('/cidadania', 'CidadaniaController@index');

Route::get('/meioambiente', 'MeioController@index');

Route::get('/esporte', 'EsporteController@index');

Route::get('/realizacoes', function () {
    return view('programas.realizacoes');
});

Route::get('/infograficos', function () {
    return view('infograficos.infograficos');
});

Route::get('/videos', function () {
    return view('depoimentos.depoimentos');
});

Route::get('/contato', function () {
    return view('contato.contato');
});

Route::get('/auth/login', 'Auth\AuthController@getLogin');
Route::post('/auth/login', 'Auth\AuthController@postLogin');
Route::get('/auth/logout',function(){
    Auth::logout();
    return redirect('/');
});

Route::get('/postagem', function () {
    return redirect('/');
});
 //implementar


Route::post('mensagem', 'MenController@store');

Route::get('news', 'News@create');

Route::post('news', 'News@store');

//fim do implementar

Route::get('/postagem/{id}','PostController@show');

// Painel (ADMIN)
Route::group(['middleware' => 'auth' ], function() 
{
    Route::get('cadastrar', 'PostController@create');
    Route::post('cadastrar', 'PostController@store');
    Route::get('postagem/{id}/editar', 'PostController@edit');
    Route::post('postagem/{id}/editar', 'PostController@update');
// dashboard

     
});


Route::get('secreto',['middleware'=>'auth', function(){
    return "Secreto!!!!";
}]);
