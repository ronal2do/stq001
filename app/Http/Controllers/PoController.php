<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class PoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {    

        $posts = DB::table('posts')
            ->take(4)
            ->orderBy('id', 'desc')
            ->get();

        return view('painel.postagens.postagens', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('cadastrar.cadastrar');
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

        //upload
        $file = $request->file('foto');

        if( $request->hasFile('foto') && $file->isValid() ){

            $file->move('img/upload', $file->getClientOriginalName());
        }

        $dadosForm['foto'] = $file->getClientOriginalName();

        $post = Post::create($dadosForm);        
        
        return redirect("postagem/$post->id");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view('templates.post', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

      //  dd($post);

        return view('cadastrar.cadastrar', compact('post'));
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
        $dadosForm = $request->except('_token');
        Post::where('id',$id)->update($dadosForm);

        return view('cadastrar.cadastrar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
