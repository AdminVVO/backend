<?php

namespace App\Http\Controllers;

use App\Models\Listings;
use Illuminate\Http\Request;

class ListingsController extends Controller
{
    public function viewListinAll()
    {
        return view('listing.ListingIndex');
    }

    public function viewListinSteps()
    {
        return view('listing.ListingSteps');
    }
}
