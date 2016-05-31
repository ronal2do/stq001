<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EspController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $titulo = 'Educação';  
        $video = 'https://www.youtube.com/embed/xkCCTNYKxVQ'; 
        $video_nome = 'O futuro de nossas crianças ganha forma nos CEUs';
        $cor = '#be1039'; 
        $posts = Post::where('categoria_id', '=', 2)->get();
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
