<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use App\Models\Listing\Listings;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function viewCalendar()
    {
        $listings = Listings::where('user_id', auth()->user()->id_user)->get();
        
        if(count($listings) == 0){
            return redirect()->route('/');
        }

        return view('calendar.indexCalendar');
    }
    
    public function viewPersonCalendar()
    {
        $listings = Listings::where('user_id', auth()->user()->id_user)->get();
        
        if(count($listings) == 0){
            return redirect()->route('/');
        }

        return view('calendar.indexPersonCalendar');
    }
}
