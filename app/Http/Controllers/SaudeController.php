<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SaudeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $titulo = 'Saúde'; 
        $video = 'https://www.youtube.com/embed/SMrKiD57ckw'; 
        $video_nome = 'O cuidado com a vida no Hospital de Clínicas';
        $cor = '#f77985'; 
        $posts = Post::where('categoria_id', '=', 1)->get();
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