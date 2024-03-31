<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function index()
    {
        return view('search.search');
    }

    public function search(Request $request)
    {
        $query = $request->input('q');
        $results = User::where('username', 'like', '%' . $query . '%')->get();

        return view('search.results', ['results' => $results]);
    }
}
