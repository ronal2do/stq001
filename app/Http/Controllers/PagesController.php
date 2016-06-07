<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function jovem()
    {
        $posts = \App\Posts::where('tipo', '=', 'postagem')->where('categoria_id', '!=', 7)->latest()->take(8)->get();
        $numero = 1;    
        $programas = \App\Posts::where('tipo', '=', 'programas')
                    ->orderBy('id', 'desc')
                    ->take(6)
                    ->where('grupo_id', '=', $numero)->get();
     // dd($programas );
        return view('persona',compact('posts', 'numero', 'programas'));
    }

    public function mulher()
    {
        $posts = \App\Posts::where('tipo', '=', 'postagem')->where('categoria_id', '!=', 7)->latest()->take(8)->get();
        $numero = 2;
        $programas = \App\Posts::where('tipo', '=', 'programas')
                    ->orderBy('id', 'desc')
                    ->take(6)
                    ->where('grupo_id', '=', $numero)->get();
    // dd($posts);
        return view('persona2',compact('posts', 'numero', 'programas'));
    }

    public function geral()
    {
        $posts = \App\Posts::where('tipo', '=', 'postagem')->where('categoria_id', '!=', 7)->latest()->take(8)->get();
        $numero = 3;
        $programas = \App\Posts::where('tipo', '=', 'programas')
                    ->orderBy('id', 'desc')
                    ->take(6)
                    ->where('grupo_id', '=', $numero)->get();
    // dd($posts);
        return view('persona3',compact('posts', 'numero', 'programas'));
    }

    public function idoso()
    {
        $posts = \App\Posts::where('tipo', '=', 'postagem')->where('categoria_id', '!=', 7)->latest()->take(8)->get();
        $numero = 4;
        $programas = \App\Posts::where('tipo', '=', 'programas')
                    ->orderBy('id', 'desc')
                    ->take(6)
                    ->where('grupo_id', '=', $numero)->get();
    // dd($posts);
        return view('persona4',compact('posts', 'numero', 'programas'));
    }

    public function getDownload()
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/downloads/info.pdf";

        $headers = array(
                  'Content-Type: application/pdf',
                );

        return response()->download($file, 'revista-op.pdf', $headers);
    }
}
