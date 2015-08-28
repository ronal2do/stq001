<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Newsletter;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;

class News extends Controller
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
        $dadosForm = $request->all();

        Newsletter::create($dadosForm);     

        $this->disparaEmail($dadosForm['name']);   
        
        return redirect("contato?#ok");
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
     private function disparaEmail($nome)
+    {
+
+        Mail::send('emails.novousuario', ['nome' => $nome], function ($m) {
+            $m->to('faq@sotaquepropaganda.com.br', 'Fulano')
+                ->subject('Novo usuário Cadastrado')
+                ;
+        });
+
+    }
}
