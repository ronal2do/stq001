<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;

class SearchController extends Controller
{
    public function busca(Request $request)
    {
        // Gets the query string from our form submission 
        $query = Request::input('str');
        // Returns an array of articles that have the query string located somewhere within 
        // our articles titles. Paginates them so we can break up lots of search results.
        $posts = Post::where('nome', 'LIKE', '%' . $query . '%')
                    ->orWhere('resumo', 'LIKE', '%' . $query . '%')
                    ->get();
        // dd($posts);
        return view('templates.busca', compact('posts', 'query'));

    
    }
}
