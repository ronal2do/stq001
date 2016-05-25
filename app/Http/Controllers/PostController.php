<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Categoria;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {   
        $cor = '#60a69d';

        $post = DB::table('posts')
            ->take(10)
            ->orderBy('id', 'desc')
            ->get();

        return view('programas/lista', compact('post','cor' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categoria = Categoria::lists('name');
        return view('cadastrar.cadastrar', compact('categoria'));
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
        if ($request->file('foto')!= NULL) {
            $file = $request->file('foto');

            if( $request->hasFile('foto') && $file->isValid() ){
                $file->move('img/upload', $file->getClientOriginalName());
            }
            $dadosForm['foto'] = $file->getClientOriginalName();
        }

        //dd($dadosForm);
        $post = Post::create($dadosForm);        
        return redirect("/historia/$post->slug");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return Response
     */
    public function show($slug)
    {
        $post = Post::findBySlug($slug);
        $categoria = Categoria::lists('name');
        return view('templates.post', compact('post', 'categoria'));
    }
     /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return Response
     */
    public function programa($slug)
    {
        $post = \App\Post::findBySlug($slug);
        $categoria = Categoria::lists('name');
        return view('templates.post', compact('post', 'categoria'));
    }
     /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return Response
     */
    public function historia($slug)
    {
        $post = \App\Post::findBySlug($slug);
        $categoria = Categoria::lists('name');
        return view('templates.post', compact('post', 'categoria'));
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
        $categoria = Categoria::lists('name');

      //  dd($post);

        return view('cadastrar.cadastrar', compact('post', 'categoria'));
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
        $categoria = Categoria::lists('name');

        return redirect("postagem");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        return redirect("artigos");
    }
    
}
