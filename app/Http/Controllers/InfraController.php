<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InfraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $titulo = 'Infraestrutura';  
        $cor = '#8cbac9'; 

        $posts = DB::table('posts')->where('categoria', '=', 4)->get();

        return view('programas.categoria', compact('posts', 'titulo', 'cor'));

    }
}
