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
        $cor = '#f8c3a5'; 

        $posts = DB::table('posts')->where('categoria', '=', 1)->get();

        return view('programas.categoria', compact('posts', 'titulo', 'cor'));

    }
}
