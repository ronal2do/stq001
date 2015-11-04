<?php

namespace App\Http\Controllers;

use DB;
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
        $video = 'https://www.youtube.com/embed/ja5bfEZ-Pp8'; 
        $video_nome = 'São Bernardo 462 anos'; 
        $cor = '#c6c2d9'; 
        $classe = 'peep-wrapd';
        $posts = DB::table('posts')->where('categoria', '=', 4)->get();

        return view('programas.categoria', compact('posts', 'titulo', 'cor', 'classe', 'video','video_nome'));

    }
}
