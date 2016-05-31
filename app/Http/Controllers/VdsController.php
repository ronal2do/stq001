<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class VdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {   
        $videos= Video::orderBy('id', 'desc')
            ->get();
        
        $rand=array_rand([
            "#f77985"=>"saude",
            "#be1039"=>"educacao",
            "#69b843"=>"infra",
            "#f87e3a"=>"cidadania",
            "#2a9fe0"=>"meio",
            "#ad4b9e"=>"esporte"
        ]);
        return view('templates/videos', compact('videos', 'rand'));

    }
}
