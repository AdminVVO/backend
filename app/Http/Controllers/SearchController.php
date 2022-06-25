<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function viewSearch(Request $request)
    {
        $request = $request->all();
        return view('search.search', compact('request'));
    }
    
    public function viewSearchFlexible(Request $request)
    {
        $request = $request->all();
        return view('search.search-flexible', compact('request'));
    }
}
