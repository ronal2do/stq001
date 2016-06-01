<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InfraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $titulo = 'Infraestrutura';  
        $video = 'https://www.youtube.com/embed/paVxXhZmXZM'; 
        $video_nome = 'Jardim Silvina se transforma com novas moradias'; 
        $cor = '#69b843'; 
        $posts = Post::where('categoria_id', '=', 4)->get();
        $rand=array_rand([
            "#f77985"=>"saude",
            "#be1039"=>"educacao",
            "#69b843"=>"infra",
            "#f87e3a"=>"cidadania",
            "#2a9fe0"=>"meio",
            "#ad4b9e"=>"esporte"
        ]); 
        return view('programas.categoria', compact('posts', 'titulo', 'cor', 'rand', 'video','video_nome'));

    }
}
