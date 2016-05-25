<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EsporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *Fall Out Boy - Sugar, We're Goin Down
     * @return Response
     */
    public function index()
    {
        $titulo = 'Esporte, cultura e lazer'; 
        $video = 'https://www.youtube.com/embed/G9wYHaTmpFI'; 
        $video_nome = 'Feira Literária de São Bernardo no Cenforpe já é sucesso de público'; 
        $cor = '#c6c2d9'; 
        $classe = 'peep-wrapd';
        $posts = Post::where('categoria_id', '=', 4)->get();

        return view('programas.categoria', compact('posts', 'titulo', 'cor', 'classe', 'video','video_nome'));

    }
}
