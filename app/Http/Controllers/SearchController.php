<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function viewSearch(Request $request)
    {
        return view('search.search');
    }
}
