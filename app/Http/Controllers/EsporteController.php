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
     * @return Response
     */
    public function index()
    {
        $titulo = 'Esporte, cultura e lazer'; 
        $video = 'https://www.youtube.com/embed/G9wYHaTmpFI'; 
        $video_nome = 'Feira Literária de São Bernardo no Cenforpe já é sucesso de público'; 
        $cor = '#ad4b9e'; 
        $posts = Post::whereIn('categoria_id', [3, 5, 8])->get();
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
