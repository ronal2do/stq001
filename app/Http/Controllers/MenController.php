<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Mensagem;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;

class MenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
       //dd($request->all());
        $dadosForm = $request->all();

        Mensagem::create($dadosForm); 

        $this->disparaEmail($dadosForm['name']);
       
        return redirect("contato");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    private function disparaEmail($nome){

        Mail::send('mail.novousuario', ['name' => $nome], function($m){
            $m->to('faq@sotaquepropaganda.com.br','#Sotaque')
              ->from('faq@sotaquepropaganda.com.br', '#SomosSBC')
              ->sender('faq@sotaquepropaganda.com.br', '#SomosSBC')
              ->bcc('faq@sotaquepropaganda.com.br', '#SomosSBC')
              ->subject('#SomosSBC - Nova mensagem');
            
        });

    }

}
