<?php

namespace App\Http\Controllers;

use DB;
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
        $video = 'https://www.youtube.com/embed/09R8_2nJtjg'; 
        $video_nome = 'Maroon 5 - Sugar';
        $cor = '#60a69d'; 
        $classe = 'peep-wrapd';

        $posts = DB::table('posts')->where('categoria', '=', 1)->get();

        return view('programas.categoria', compact('posts', 'titulo', 'cor', 'classe', 'video','video_nome'));

    }
}
