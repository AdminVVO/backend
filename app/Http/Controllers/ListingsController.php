<?php

namespace App\Http\Controllers;

use App\Models\Listing\Listings;
use App\Models\TemporyFile;
use Auth;
use File;
use Illuminate\Http\Request;
use Storage;
use Str;
use session;

class ListingsController extends Controller
{
    public function viewListinAll()
    {
        return view('listing.ListingIndex');
    }

    public function viewListinBecome()
    {
        return view('listing.ListingBecome');
    }

    public function viewListinShow($listing)
    {
        if ( Listings::where([ 'id_listings' => $listing, 'user_id' => Auth::id() ])->doesntExist() )
            return redirect()->route('listing');

        return view('listing.ListingDetails', ['listing' => $listing]);
    }

    public function viewCustomLink($custom)
    {
        $qlistings = Listings::where([ 'custom_link' => $custom ])->pluck('id_listings')->first();
            if ( !$qlistings )
                return redirect()->route('/');

        return redirect()->route('interna', $qlistings);
    }
}
