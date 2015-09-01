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
     *
     * @return Response
     */
    public function index()
    {
        $titulo = 'Meio ambiente';  
        $cor = '#60a69d';
        $classe = 'peep-wrapd';

        $posts = DB::table('posts')->where('categoria', '=', 6)->get();

        return view('programas.categoria', compact('posts', 'titulo', 'cor', 'classe'));

    }
}
