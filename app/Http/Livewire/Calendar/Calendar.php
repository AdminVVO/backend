<?php

namespace App\Http\Livewire\Calendar;

use App\Models\DateConfig;
use App\Models\Listing\Listings;
use App\Models\Reservation;
use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Auth;

class Calendar extends Component
{
    public $listings = [];
    public $reservation = [];
    public $display = '';
    public $days = '';
    public $color = '';
    public $search = '';
    public $listing_id = '';
    public $findReservation = [];
    public $date_init = '';
    public $date_end = '';
    public $price = null;
    public $available = 1;
    public $date_config = [];

    public function preLoad()
    {
        $this->queryList();
    }

    public function queryList()
    {
        $this->reset(['listings', 'reservation', 'date_config']);
        $listings = Listings::select(
            'id_listings',
            'title',
            'internal_title',
            'base_price',
            'listing_currency',
            'photos'
        )
            ->leftJoin('listing_pricings', 'listings.id_listings', 'listing_pricings.listing_id')
            ->where([
                'listings.user_id' => Auth::id()
            ])->when(isset($this->search), function ($listings) {
                return $listings->where('title', 'like', '%' . $this->search . '%');
            })->get()->toArray();


        foreach ($listings as $key => $value) {
            $listings_id[$key] = $value['id_listings'];
            $this->listings[$key]['id'] = $value['id_listings'];
            $this->listings[$key]['title'] = $value['title'];
            $this->listings[$key]['internal_title'] = $value['internal_title'];
            $this->listings[$key]['base_price'] = $value['base_price'];
            $this->listings[$key]['listing_currency'] = $value['listing_currency'];
            $this->listings[$key]['imgUri'] = `<img src="{{ URL::asset('assets/img/anality.jpg')}}" alt="">`;
        }

        $reservations = Reservation::join('users', 'reservations.user_id', 'users.id_user')->whereIn('listing_id', $listings_id)->get()->toArray();
        $date_config = DateConfig::whereIn('listing_id', $listings_id)->get(['is_active', 'listing_id', 'price', 'date'])->toArray();
        
        foreach ($date_config as $key => $data) {
            $this->date_config[$data['date']] = [
                'price' => $data['price'],
                'listing_id' => $data['listing_id'],
                'is_active' => $data['is_active']
            ];
        }
        
        foreach ($reservations as $key => $data) {
            if ($data['status'] == 0) {
                $this->color = 'green';
            } else {
                $this->color = 'red';
            }

            $this->reservation[] = [
                'resourceId' => $data['listing_id'],
                'title' => $data['name'],
                'start' => $data['checkin'],
                'end' => $data['checkout'],
                'description' => 'hola',
                'reservId' => $data['id_reservation'],
                'backgroundColor' => $this->color,
            ];

            if (date('y-m-d', time()) > Carbon::parse($data['checkin'])->format('y-m-d')) {
                $this->reservation[$key] = array_merge($this->reservation[$key], ['editable' => false]);
            }
        };
    }

    public function render()
    {
        $this->preLoad();
        return view('livewire.calendar.calendar');
    }

    public function searchListing($data)
    {
        $this->search = $data;
        $this->preLoad();
    }

    public function showReservation($reservation_id)
    {
        $reservation = Reservation::join('users', 'reservations.user_id', 'users.id_user')
            ->join('listings', 'reservations.listing_id', 'listings.id_listings')
            ->where('id_reservation', $reservation_id)->first()->toArray();

        $day = (new Carbon($reservation['checkin']))->diff(now())->d + 1;
        $this->findReservation = [
            'arriving' => 'Arriving in ' . $day . ' days',
            'checkin' => Carbon::parse($reservation['checkin'])->isoFormat('ddd, MMM YY'),
            'checkout' => Carbon::parse($reservation['checkout'])->isoFormat('ddd, MMM YY'),
            'nights' => Carbon::parse($reservation['checkout'])->diffInDays($reservation['checkin']),
            'total_payout' => $reservation['total_payout'],
            'user_id' => $reservation['user_id'],
            'name' => $reservation['name'],
            'guest' => $reservation['number_guests'],
            'total_comming' => $reservation['number_guests'],
        ];
    }

    public function DateConfig()
    {
        if ($this->date_init == '') {
            return;
        }
        $dates = $this->UpdateDateConfig();
        $this->CreateDateConfig($dates);
        $this->preLoad();
    }

    public function CreateDateConfig($dates)
    {
        if (count($dates) == 1 && $this->date_end == '') {
            return;
        }

        if ($this->available == false && $this->date_end == '') {
            DateConfig::create(
                [
                    'id_date_config' => Str::uuid(),
                    'listing_id' => $this->listing_id,
                    'is_active' => $this->available,
                    'date' => $this->date_init,
                    'price' => 0,
                ]
            );
            return;
        }

        if ($this->available == true && $this->date_end == '') {
            DateConfig::create(
                [
                    'id_date_config' => Str::uuid(),
                    'listing_id' => $this->listing_id,
                    'is_active' => $this->available,
                    'date' => $this->date_init,
                    'price' => 0,
                ]
            );
            return;
        }

        $arr_date = [];
        $fechaInicio = strtotime($this->date_init);
        $fechaFin = strtotime($this->date_end);

        for ($i = $fechaInicio; $i < $fechaFin; $i += 86400) {
            $arr_date[] = date("Y-m-d", $i);
        }
        $differenceArrayDate = array_diff($arr_date, $dates);

        foreach ($differenceArrayDate as $key => $data) {
            if ($this->available == false) {
                DateConfig::create(
                    [
                        'id_date_config' => Str::uuid(),
                        'listing_id' => $this->listing_id,
                        'is_active' => $this->available,
                        'date' => $data,
                        'price' => 0,
                    ]
                );
            }

            if ($this->available == true) {
                DateConfig::create(
                    [
                        'id_date_config' => Str::uuid(),
                        'listing_id' => $this->listing_id,
                        'is_active' => $this->available,
                        'date' => $data,
                        'price' => $this->price
                    ]
                );
            }
        }
    }

    public function UpdateDateConfig()
    {
        $date = [];
        if ($this->date_end != '') {
            $date_config = DateConfig::whereBetween('date', [$this->date_init, $this->date_end])
                ->where('listing_id', $this->listing_id)->get();
        } else {
            $date_config = DateConfig::where('date', $this->date_init)
                ->where('listing_id', $this->listing_id)->get();
        }

        if (!$date_config) {
            return false;
        }

        foreach ($date_config as $key => $data) {
            $date[] = $data->date;
            if ($this->available && $this->price != 0) {
                $data->update(
                    [
                        'is_active' => $this->available,
                        'price' => $this->price,
                    ]
                );
            } else if($this->available && $this->price == 0) {
                $data->delete();
            }
             else {
                $data->update(
                    [
                        'is_active' => $this->available,
                        'price' => 0,
                    ]
                );
            }
        }
        return $date;
    }
}
