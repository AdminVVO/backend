<?php

namespace App\Http\Controllers;

use App\Models\Wishlists as modelWishlists;
use Illuminate\Http\Request;
use Auth;

class Wishlists extends Controller
{
    public function viewWishlists()
    {
        $content = modelWishlists::select(
            'wishlists.name',
            'listings.photos',
        )->where([
            'wishlists.user_id' => Auth::id()
        ])
        ->leftJoin('listings', 'wishlists.listing_id', 'listings.id_listings')
        ->get();

        return view('wishlists.index', ['content' => $content]);
    }
}
