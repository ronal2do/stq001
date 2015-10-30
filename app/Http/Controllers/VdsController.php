<?php

namespace App\Http\Controllers;

use DB;
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
        $videos= DB::table('videos')
            ->orderBy('id', 'desc')
            ->get();
        return view('templates/videos', compact('videos'));

    }
}
