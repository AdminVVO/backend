<?php

namespace App\Http\Livewire\Calendar;

use App\Models\Listing\Listings;
use Livewire\Component;
use Auth;
use Carbon\Carbon;

class Calendar extends Component
{
    public $listings = [];
    public $days = '';
    public $all_days = [];
    public $month = '';
    public $year = '';
    public $divs = '';

    public function mount()
    {
        $this->dateCalendar();

        $this->divs ='
        <div class="outer">
        <div class="inner">
            <table>
                <tr>';
        foreach ($this->all_days as $key => $day) {
            $this->divs = $this->divs . '<th>' . $day . '</th>';
        }

    //     <td id="lista3" rowspan="2">
    //     <div class="cel">col 3 - A</div>
    //     <div class="cel">col 2 - A</div>
    // </td>
        $this->divs = $this->divs . '</tr>
                <tr>
                    <td style="width: auto">
                        <table >
                            <tr>
                                <th>Header A</th>
                                <td>
                                    <div class="cel">col 1 - A</div>
                                </td>
                                <td id="lista2" colspan="2">
                                    <div class="cel" value="2">col 2 - A</div>
                                </td>
                                <td id="lista3">
                                    <div class="cel">col 3 - A</div>
                                </td>
                                <td id="lista4">
                                    <div class="cel">col 4 - A</div>
                                </td>
                                <td id="lista5">
                                    <div class="cel">col 5 - A</div>
                                </td>
                                <td id="lista6">
                                    <div class="cel">col 6 - A</div>
                                </td>
                                <td id="lista7">
                                    <div class="cel">col 7 - A</div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table>

                            <tr>
                                <th>Header B</th>
                                <td id="lista8">
                                    <div>col 1 - B</div>
                                </td>
                                <td id="lista9">
                                    <div>col 2 - B</div>
                                </td>
                                <td id="lista10">
                                    <div>col 3 - B</div>
                                </td>
                                <td id="lista11">
                                    <div>col 4 - B</div>
                                </td>
                                <td id="lista12">
                                    <div>col 5 - B</div>
                                </td>
                                <td id="lista13">
                                    <div>col 6 - B</div>
                                </td>
                                <td id="lista14">
                                    <div>col 7 - B</div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>';

        $listings = Listings::select(
            'id_listings',
            'title',
            'internal_title',
            'photos'
        )->where([
            'user_id' => Auth::id()
        ])->get()->toArray();

        foreach ($listings as $key => $value) {
            $listings[$key]['photo'] = $value['photos'][0];
            unset($listings[$key]['photos']);
        }


        $this->listings = collect($listings);
    }

    public function render()
    {
        return view('livewire.calendar.calendar');
    }

    public function selectListing($payload)
    {
        dd($payload);
    }

    public function dateCalendar()
    {
        if (!$this->month) {
            $this->month = date('m');
        }
        if (!$this->year) {
            $this->year = date('Y');
        }

        $carbon = new Carbon();
        // dd($carbon->parse($year.'-'.$month.'-05')->isoFormat('dddd D'));        //Sunday 5

        $this->days = cal_days_in_month(CAL_GREGORIAN, $this->month, $this->year);
        for ($i = 1; $i <= $this->days; $i++) {
            $this->all_days[] = $carbon->parse($this->year . '-' . $this->month . '-' . $i)->isoFormat('dddd D');
        }
    }
}
