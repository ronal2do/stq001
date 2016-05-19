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
        $posts = \App\Posts::latest()->take(4)->get();
        $numero = 1;    
        $programas = \App\Programas::orderBy('id', 'desc')->take(6)->where('categoria', '=', $numero)->get();
    // dd($programas);
        return view('persona',compact('posts', 'numero', 'programas'));
    }

    public function mulher()
    {
        $posts = \App\Posts::latest()->take(4)->get();
        $numero = 2;
       $programas = \App\Programas::orderBy('id', 'desc')->take(6)->where('categoria', '=', $numero)->get();
    // dd($posts);
        return view('persona2',compact('posts', 'numero', 'programas'));
    }

    public function homem()
    {
        $posts = \App\Posts::latest()->take(4)->get();
        $numero = 3;
        $programas = \App\Programas::orderBy('id', 'desc')->take(6)->where('categoria', '=', $numero)->get();
    // dd($posts);
        return view('persona3',compact('posts', 'numero', 'programas'));
    }

    public function idoso()
    {
        $posts = \App\Posts::latest()->take(4)->get();
        $numero = 4;
        $programas = \App\Programas::orderBy('id', 'desc')->take(6)->where('categoria', '=', $numero)->get();
    // dd($posts);
        return view('persona4',compact('posts', 'numero', 'programas'));
    }
     public function busca()
    {
        $posts = \App\Posts::orderBy('id', 'desc')->get();
        $categorias = \App\Categoria::orderBy('id', 'desc')->get();
        $str = Input::get('str');
        $postquerys = \App\Posts::like('descricao', $str)->get();
        
        return view('blog.busca', compact('categorias', 'postquerys', 'posts', 'str'));
    }
    
}
