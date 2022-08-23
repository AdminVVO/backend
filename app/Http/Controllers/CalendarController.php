<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use App\Models\Listing\Listings;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function viewCalendar()
    {
        $listings = Listings::where(auth()->user()->id_user)->get();
        
        if(count($listings) == 0){
            return redirect()->route('/');
        }

        return view('calendar.indexCalendar');
    }
    
    public function viewPersonCalendar()
    {
        // $this->validateListings();
        $listings = Listings::where(auth()->user()->id_user)->get();
        
        if(count($listings) == 0){
            return redirect()->route('/');
        }

        return view('calendar.indexPersonCalendar');
    }
}
