<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
use Validator;
use App\Mensagem;

class MenController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'nome' => 'required|min:3',
            'email' => 'email',
            'telefone' => 'numeric'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $dadosForm = $request->all();

        Mensagem::create($dadosForm); 
       
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
  /*  private function disparaEmail($nome){

        Mail::send('mail.novousuario', ['name' => $nome], function($m){
            $m->to('faq@sotaquepropaganda.com.br','#Sotaque')
              
 
              ->bcc('faq@sotaquepropaganda.com.br', '#SomosSBC')
              ->subject('#SomosSBC - Nova mensagem');
            
        });

    }*/

}
