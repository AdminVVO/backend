<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function viewCalendar()
    {
        return view('calendar.indexCalendar');
    }
}
