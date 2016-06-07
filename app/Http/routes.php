<?php

Route::get('/', ['as' => 'welcome', function(){
    $posts = \App\Posts::latest()->get();
    // dd($posts);
    return view('selection',compact('posts'));
}]);

Route::get('/realizacoes', ['as' => 'realizacoes', function(){
    $posts = \App\Posts::where('tipo', '!=', 'historia')->where('tipo', '!=', 'NULL' )->latest()->get();
    $titulo = 'Realizações';
    $rand=array_rand([
            "#f77985"=>"saude",
            "#be1039"=>"educacao",
            "#69b843"=>"infra",
            "#f87e3a"=>"cidadania",
            "#2a9fe0"=>"meio",
            "#ad4b9e"=>"esporte"
        ]);
    return view('templates.realizacoes',compact('posts', 'rand', 'titulo'));
}]);
Route::get('/download', 'PagesController@getDownload');
Route::get('jovem', 'PagesController@jovem');
Route::get('mulher', 'PagesController@mulher');
Route::get('geral', 'PagesController@geral');
Route::get('idoso', 'PagesController@idoso');

Route::get('/seminario', ['as' => 'seminario', function(){
    $rand=array_rand([
            "#f77985"=>"saude",
            "#be1039"=>"educacao",
            "#69b843"=>"infra",
            "#f87e3a"=>"cidadania",
            "#2a9fe0"=>"meio",
            "#ad4b9e"=>"esporte"
        ]);
    return view('templates.pseminario', compact('rand'));
}]);

Route::get('/saude', 'SaudeController@index');

Route::get('/educacao', 'EspController@index');

Route::get('/infraestrutura', 'InfraController@index');

Route::get('/cidadania', 'CidadaniaController@index');

Route::get('/meioambiente', 'MeioController@index');

Route::get('/esporte', 'EsporteController@index');

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
Route::get('videos', 'VdsController@index');

Route::get('/postagem/{slug}','PostController@show');
Route::get('/programas/{slug}','PostController@programa');
Route::get('/historia/{slug}','PostController@historia');
Route::get('/buscar', ['uses' => 'SearchController@busca', 'as' => 'busca']);