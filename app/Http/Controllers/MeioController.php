<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MeioController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $titulo = 'Meio ambiente';  
        $video = 'https://www.youtube.com/embed/WMnr85Tin0o'; 
        $video_nome = 'Visite o Zoológico do Parque Estoril'; 
        $cor = '#2a9fe0';
        
        $posts = Post::where('categoria_id', '=', 9)->get();
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
