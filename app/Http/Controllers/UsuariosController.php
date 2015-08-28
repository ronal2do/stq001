<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $titulo = 'Usuarios'; 

        $users = DB::table('users')
        	->get();

       //dd($users);

        return view('painel.tables', compact('users', 'titulo'));

    }
}
