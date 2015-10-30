<?php

namespace App\Http\Controllers;

use DB;
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
        $video = 'https://www.youtube.com/embed/bvC_0foemLY'; 
        $video_nome = 'Robin Schulz - Sugar'; 
        $cor = '#60a69d';
        $classe = 'peep-wrapd';
        
        $posts = DB::table('posts')->where('categoria', '=', 6)->get();

        return view('programas.categoria', compact('posts', 'titulo', 'cor', 'classe', 'video','video_nome'));

    }
}
