<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function jovem()
    {
        $posts = \App\Posts::latest()->get();
        $numero = 1;
    // dd($posts);
        return view('persona',compact('posts', 'numero'));
    }

        public function mulher()
    {
        $posts = \App\Posts::latest()->get();
        $numero = 2;
    // dd($posts);
        return view('persona2',compact('posts', 'numero'));
    }

        public function homem()
    {
        $posts = \App\Posts::latest()->get();
        $numero = 3;
    // dd($posts);
        return view('persona3',compact('posts', 'numero'));
    }

        public function idoso()
    {
        $posts = \App\Posts::latest()->get();
        $numero = 4;
    // dd($posts);
        return view('persona4',compact('posts', 'numero'));
    }

    
}
