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
     *
     * @return Response
     */
    public function index()
    {
        $titulo = 'Esporte, cultura e lazer';  
        $cor = '#f8c3ac'; 

        $posts = DB::table('posts')->where('categoria', '=', 3)->get();

        return view('programas.categoria', compact('posts', 'titulo', 'cor'));

    }
}
