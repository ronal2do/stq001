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
        $cor    = '#f6acb3'; 
        $posts  = DB::table('posts')->where('categoria', '=', 2)->get();
        return view('programas.categoria', compact('posts', 'titulo', 'cor'));

    }
}
