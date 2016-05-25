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
        $cor = '#8cbac9'; 
        $classe = 'peep-wrapd';

        $posts = Post::where('categoria_id', '=', 5)->get();

        return view('programas.categoria', compact('posts', 'titulo', 'cor', 'classe', 'video','video_nome'));

    }
}
