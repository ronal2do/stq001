<?php

namespace App\Http\Controllers;

use DB;
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
        $video = 'https://www.youtube.com/embed/h9nE2spOw_o'; 
        $video_nome = 'The Archies - Sugar, Sugar ';
        $cor = '#f8c3a5'; 
        $classe = 'peep-wrapd';

        $posts = DB::table('posts')->where('categoria', '=', 2)->get();

        return view('programas.categoria', compact('posts', 'titulo', 'cor','classe', 'video','video_nome'));

    }
}
