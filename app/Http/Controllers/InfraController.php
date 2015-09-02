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
        $cor = '#f6acb3'; 
        $classe = 'peep-wrapd';

        $posts = DB::table('posts')->where('categoria', '=', 5)->get();

        return view('programas.categoria', compact('posts', 'titulo', 'cor', 'classe'));

    }
}
