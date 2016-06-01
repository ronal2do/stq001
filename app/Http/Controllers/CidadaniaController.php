<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CidadaniaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {   
        $titulo = 'Desenvolvimento social e cidadania';  
        $video = 'https://www.youtube.com/embed/8beAf5UC1vo'; 
        $video_nome = 'Afetividade e atividade contribuem para a saúde dos idosos'; 
        $cor   = '#f87e3a';
        $posts = Post::where('categoria_id', '=', 6)->get();    
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
