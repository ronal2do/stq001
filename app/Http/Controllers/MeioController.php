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
     *  https://www.youtube.com/embed/bvC_0foemLY
     * @return Response
     */
    public function index()
    {
        $titulo = 'Meio ambiente';  
        $video = 'https://www.youtube.com/embed/WMnr85Tin0o'; 
        $video_nome = 'Visite o Zoológico do Parque Estoril'; 
        $cor = '#60a69d';
        $classe = 'peep-wrapd';
        
        $posts = Post::where('categoria_id', '=', 6)->get();

        return view('programas.categoria', compact('posts', 'titulo', 'cor', 'classe', 'video','video_nome'));

    }
}
