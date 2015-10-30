<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Video;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\VidCategoria;
class VdController extends Controller
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

    public function lista()
    {   
        $cor = '#60a69d';
        $video = DB::table('videos')
            
            ->take(10)
            ->orderBy('id', 'desc')
            ->get();
        
        return view('templates/lista', compact('video','cor' ));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
       
        return view('templates.video');
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
        $post = Video::create($dadosForm);        
        
        return redirect("videos");
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $video = Video::find($id);
        return view('templates.video', compact('video'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $post = Video::find($id);
        $vid_categoria = VidCategoria::lists('name');
      //dd($post);
        return view('cadastrar.video', compact('post', 'vid_categoria'));
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
        Video::where('id',$id)->update($dadosForm);
        $vid_categoria = VidCategoria::lists('name');
        return redirect("home");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $post = Video::find($id);
        $post->delete();
        return redirect("editarvideo");
    }
}