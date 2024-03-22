<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        return view('search');
    }
    public function search(Request $request)
    {
        $search = $request->get('search');
        $posts = \App\Models\Post::where('caption', 'like', '%'.$search.'%')->get();
        return view('search', compact('posts'));
    }
}
