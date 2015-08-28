<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SaudeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $titulo = 'Saúde';  
        $cor = '#fdbf2f'; 

        $posts = DB::table('posts')->where('categoria', '=', 0)->get();

        return view('programas.categoria', compact('posts', 'titulo', 'cor'));

    }
}
