<?php

namespace App\Http\Controllers;

use DB;
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
        $video = 'https://www.youtube.com/embed/Rt-F83gzFyM'; 
        $video_nome = 'Alfabetizar é paixão que exige dedicação'; 
        $cor    = '#f6acb3'; 
        $classe = 'peep-wrapd';
        $posts  = DB::table('posts')->where('categoria', '=', 3)->get();
        return view('programas.categoria', compact('posts', 'titulo', 'cor', 'classe', 'video','video_nome'));

    }
}
