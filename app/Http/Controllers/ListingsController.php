<?php

namespace App\Http\Controllers;

use App\Models\Listings;
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

    public function viewListinSteps()
    {
        return view('listing.ListingSteps');
    }

    public function viewListinShow($listing)
    {
        if ( Listings::where([ 'id_listings' => $listing ])->doesntExist() )
            return redirect()->route('listing');

        return view('listing.ListingDetails', ['listing' => $listing]);
    }

    // public function viewListinShow($listing)
    // {
    //     if ( Listings::where([ 'id_listings' => $listing ])->doesntExist() )
    //         return redirect()->route('listing');

    //     return view('listing.ListingShow', ['listing' => $listing]);
    // }

    public function uploadFileDragzone(Request $request)
    {
        if ( $request->hasFile('uploadPhoto')) {

            $nameOriginal = $request->file('uploadPhoto')->getClientOriginalName();
            $extension = pathinfo( $nameOriginal, PATHINFO_EXTENSION);
            $filename = Str::random(10) . '.' . $extension;
            $folderAuth = Auth::user()->name . '-' . Auth::id();

            $path = $request->file('uploadPhoto')->storeAs( $folderAuth, $filename , 'uploadTempFilepond');
            return response( $filename, 200)->header('Content-Type', 'text/plain');
        }
    }

    public function deleteFileDragzone(Request $request)
    {
        if ( request()->getContent() != '' ) {

            $folderAuth = Auth::user()->name . '-' . Auth::id();
            Storage::disk('uploadTempFilepond')->delete( $folderAuth . '/' . request()->getContent() ); 

            $folder = File::allFiles(storage_path('app/public/tempFilepond/' . $folderAuth)); 
            if ( count( $folder) == 0) {
                File::deleteDirectory( storage_path('app/public/tempFilepond/' . $folderAuth) );
            }
        }
    }
}
