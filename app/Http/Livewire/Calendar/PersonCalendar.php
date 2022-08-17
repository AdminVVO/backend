<?php

namespace App\Http\Livewire\Calendar;

use App\Models\DateConfig;
use App\Models\Listing\Listings;
use App\Models\Reservation;
use Illuminate\Support\Str;
use Livewire\Component;
use Auth;
use Carbon\Carbon;


class PersonCalendar extends Component
{
    public $title = '';
    public $listings = [];
    public $reservation = [];
    public $note = '';
    public $date_config_note = '';
    public $show_modal = 0;
    public $show_modal_info = 0;
    public $display = '';
    public $days = '';
    public $color = '';
    public $search = '';
    public $listing_id = '';
    public $findReservation = [];
    public $date_init = '';
    public $date_end = '';
    public $price = 0;
    public $available = 1;
    public $date_config = [];

    public function preLoad()
    {
        $this->reset(['listings', 'reservation', 'date_config']);
        $listings = Listings::select(
            'id_listings',
            'title',
            'internal_title',
            'base_price',
            'listing_currency',
            'photos',
            'listings.created_at as created_at'
        )
            ->leftJoin('listing_pricings', 'listings.id_listings', 'listing_pricings.listing_id')
            ->where([
                'listings.user_id' => Auth::id()
            ])
            ->get()->toArray();

        if (count($listings) == 0) {
            return;
        }
        foreach ($listings as $key => $value) {
            $listings_id[$key] = $value['id_listings'];
            $this->listings[$key]['id'] = $value['id_listings'];
            $this->listings[$key]['title'] = $value['title'];
            $this->listings[$key]['created_at'] = $value['created_at'];
            $this->listings[$key]['internal_title'] = $value['internal_title'];
            $this->listings[$key]['base_price'] = $value['base_price'];
            $this->listings[$key]['listing_currency'] = $value['listing_currency'];
            $this->listings[$key]['imgUri'] = $value['photos'][0]['name'];
        }

        if($this->title == '') {
        }
        // $listings_id = $listings['id_listings'];
        // $this->listings['id'] = $listings['id_listings'];
        // $this->listings['title'] = $listings['title'];
        // $this->listings['created_at'] = $listings['created_at'];
        // $this->listings['internal_title'] = $listings['internal_title'];
        // $this->listings['base_price'] = $listings['base_price'];
        // $this->listings['listing_currency'] = $listings['listing_currency'];
        // $this->listings['imgUri'] = `<img src="{{ URL::asset('assets/img/anality.jpg')}}" alt="">`;
        

        if ($this->listing_id == '') {
            $this->listing_id = $this->listings[0]['id'];
        }

        foreach($this->listings as $key => $up) {
            if($this->listing_id == $up['id']) {
                $this->title = $up['title'];
            } 
        }

        $fechaInicio = strtotime($this->date_init);
        $fechaFin = strtotime($this->date_end);

        $reservations = Reservation::join('users', 'reservations.user_id', 'users.id_user')
            ->join('listings', 'reservations.listing_id', 'listings.id_listings')
            ->where('listing_id', $this->listing_id)->get(['listing_id', 'name', 'total_payout', 'checkin', 'checkout', 'id_reservation', 'reservations.status', 'note', 'avatar'])->toArray();

        $date_config = DateConfig::where('listing_id', $this->listing_id)->join('listings', 'date_config.listing_id', 'listings.id_listings')->orderBy('date')->get(['is_active', 'listing_id', 'price', 'date', 'id_listings'])->toArray();
        foreach ($date_config as $key => $data) {
            $this->date_config[$data['date']] = [
                'price' => $data['price'],
                'listing_id' => $data['listing_id'],
                'is_active' => $data['is_active'],
                'listing' => $data['id_listings']
            ];
        }
        foreach ($reservations as $key => $data) {
            $fechaInicio = strtotime($data['checkin']);
            $fechaFin = strtotime($data['checkout']);
            for ($i = $fechaInicio; $i <= $fechaFin; $i += 86400) {
                $this->reservation[] = [
                    'resourceId' => $data['listing_id'],
                    'title' => $data['name'],
                    'total_payout' => $data['total_payout'],
                    'start' => date("Y-m-d", $i),
                    'description' => 'description',
                    'reservId' => $data['id_reservation'],
                    'status' => $data['status'],
                    'avatar' => $data['avatar']
                ];
            }
        };
    }

    public function render()
    {
        $this->preLoad();
        return view('livewire.calendar.person-calendar');
    }

    public function showReservation($reservation_id)
    {
        $reservation = Reservation::join('users', 'reservations.user_id', 'users.id_user')
            ->join('listings', 'reservations.listing_id', 'listings.id_listings')
            ->where('id_reservation', $reservation_id)->first()->toArray();
            $day = (new Carbon(now()))->diff($reservation['checkin'])->format("%r%a");
            $day_dif = $day >= 0 ? 'Arriving in ' . $day . ' days -' : '';
        $this->findReservation = [
            'id_reservation' => $reservation['id_reservation'],
            'arriving' => $day_dif,
            'checkin' => Carbon::parse($reservation['checkin'])->isoFormat('ddd, MMM D'),
            'checkout' => Carbon::parse($reservation['checkout'])->isoFormat('ddd, MMM D'),
            'nights' => Carbon::parse($reservation['checkout'])->diffInDays($reservation['checkin']),
            'total_payout' => $reservation['total_payout'],
            'user_id' => $reservation['user_id'],
            'name' => $reservation['name'],
            'guest' => $reservation['number_guests'],
            'total_comming' => $reservation['number_guests'],
            'avatar' => $reservation['avatar'],
            'note' => $reservation['note']
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
        $this->render();
        $this->reset('price');
    }

    public function CreateDateConfig($dates)
    {
        if (count($dates) == 1 && $this->date_end == '') {
            return;
        }

        if ($this->available == false && $this->date_end == '') {
            if ($this->note == '') {
                DateConfig::create(
                    [
                        'id_date_config' => Str::uuid(),
                        'listing_id' => $this->listing_id,
                        'is_active' => $this->available,
                        'date' => $this->date_init,
                        'price' => 0,
                        'note' => ''
                    ]
                );
            } else {
                DateConfig::create(
                    [
                        'id_date_config' => Str::uuid(),
                        'listing_id' => $this->listing_id,
                        'is_active' => $this->available,
                        'date' => $this->date_init,
                        'price' => 0,
                        'note' => $this->note
                    ]
                );
            }
            return;
        }

        if ($this->available == true && $this->date_end == '' && $this->price > 0) {
            if ($this->note == '') {
                DateConfig::create(
                    [
                        'id_date_config' => Str::uuid(),
                        'listing_id' => $this->listing_id,
                        'is_active' => $this->available,
                        'date' => $this->date_init,
                        'price' => $this->price,
                        'note' => ''
                    ]
                );
            } else {
                DateConfig::create(
                    [
                        'id_date_config' => Str::uuid(),
                        'listing_id' => $this->listing_id,
                        'is_active' => $this->available,
                        'date' => $this->date_init,
                        'price' => $this->price,
                        'note' => $this->note,
                    ]
                );
            }
            return;
        }

        if ($this->available == true && $this->date_end == '' && ($this->price == 0 || $this->price == '')) {
            if($this->note != '') {
                $base_price = Listings::where('id_listings', $this->listing_id)
                ->leftJoin('listing_pricings', 'listings.id_listings', 'listing_pricings.listing_id')
                ->first('base_price')->base_price;
                DateConfig::create(
                    [
                        'id_date_config' => Str::uuid(),
                        'listing_id' => $this->listing_id,
                        'is_active' => $this->available,
                        'date' => $this->date_init,
                        'price' => $base_price,
                        'note' => $this->note
                    ]
                );
            }
            return;
        }
        if ($this->available == true && $this->date_end == '' && $this->price > 0) {
            if ($this->note == '') {
                DateConfig::create(
                    [
                        'id_date_config' => Str::uuid(),
                        'listing_id' => $this->listing_id,
                        'is_active' => $this->available,
                        'date' => $this->date_init,
                        'price' => $this->price,
                        'note' => ''
                    ]
                );
            } else {
                DateConfig::create(
                    [
                        'id_date_config' => Str::uuid(),
                        'listing_id' => $this->listing_id,
                        'is_active' => $this->available,
                        'date' => $this->date_init,
                        'price' => $this->price,
                        'note' => $this->note,
                    ]
                );
            }
            return;
        }

        $arr_date = [];
        $fechaInicio = strtotime($this->date_init);
        $fechaFin = strtotime($this->date_end);

        for ($i = $fechaInicio; $i <= $fechaFin; $i += 86400) {
            $arr_date[] = date("Y-m-d", $i);
        }
        $differenceArrayDate = array_diff($arr_date, $dates);

        foreach ($differenceArrayDate as $key => $data) {
            if ($this->available == false) {
                if ($this->note == '') {
                    DateConfig::create(
                        [
                            'id_date_config' => Str::uuid(),
                            'listing_id' => $this->listing_id,
                            'is_active' => $this->available,
                            'date' => $data,
                            'price' => 0,
                            'note' => '',
                        ]
                    );
                } else {
                    DateConfig::create(
                        [
                            'id_date_config' => Str::uuid(),
                            'listing_id' => $this->listing_id,
                            'is_active' => $this->available,
                            'date' => $data,
                            'price' => 0,
                            'note' => $this->note,
                        ]
                    );
                }
            }

            if ($this->available == true) {
                if ($this->note == '') {
                    DateConfig::create(
                        [
                            'id_date_config' => Str::uuid(),
                            'listing_id' => $this->listing_id,
                            'is_active' => $this->available,
                            'date' => $data,
                            'price' => $this->price,
                            'note' => ''
                        ]
                    );
                } else {
                    DateConfig::create(
                        [
                            'id_date_config' => Str::uuid(),
                            'listing_id' => $this->listing_id,
                            'is_active' => $this->available,
                            'date' => $data,
                            'price' => $this->price,
                            'note' => $this->note
                        ]
                    );
                }
            }
        }
    }

    public function UpdateDateConfig()
    {
        $date = [];
        if ($this->date_end != '') {
            $date_config = DateConfig::join('listings', 'date_config.listing_id', 'id_listings')->whereBetween('date', [$this->date_init, $this->date_end])
                ->join('listing_pricings', 'listings.id_listings', 'listing_pricings.listing_id')
                ->where('date_config.listing_id', $this->listing_id)->get();
        } else {
            $date_config = DateConfig::join('listings', 'date_config.listing_id', 'id_listings')->where('date', $this->date_init)
                ->join('listing_pricings', 'listings.id_listings', 'listing_pricings.listing_id')
                ->where('date_config.listing_id', $this->listing_id)->get();
        }

        if (!$date_config) {
            return false;
        }

        foreach ($date_config as $key => $data) {
            $date[] = $data->date;
            if ($this->available && $this->price > 0) {
                if ($this->note == '') {
                    DateConfig::where('id_date_config', $data->id_date_config)->update([
                        'is_active' => $this->available,
                        'price' => $this->price,
                    ]);
                } else {
                    DateConfig::where('id_date_config', $data->id_date_config)->update([
                        'is_active' => $this->available,
                        'price' => $this->price,
                        'note' => $this->note,
                    ]);
                }
            } else if ($this->available && ($this->price == 0 || $this->price == '')) {
                if ($this->note == '') {
                    DateConfig::where('id_date_config', $data->id_date_config)->update([
                        'is_active' => $this->available,
                        'price' => $data->base_price,
                    ]);
                } else {
                    DateConfig::where('id_date_config', $data->id_date_config)->update([
                        'is_active' => $this->available,
                        'price' => $data->base_price,
                        'note' => $this->note,
                    ]);
                }
            } else {
                if ($this->note == '') {
                    DateConfig::where('id_date_config', $data->id_date_config)->update([
                        'is_active' => $this->available,
                        'price' => 0,
                    ]);
                } else {
                    DateConfig::where('id_date_config', $data->id_date_config)->update([
                        'is_active' => $this->available,
                        'price' => 0,
                        'note' => $this->note
                    ]);
                }
            }
        }
        return $date;
    }

    public function NoteConfig()
    {
        if ($this->date_init == '') {
            return;
        }
        $dates = $this->UpdateNoteConfig();
        $this->CreateDateConfig($dates);
        $this->reset('price');
        $this->showDate($this->date_init, $this->listing_id);
    }

    public function UpdateNoteConfig()
    {

        $date = [];
        if ($this->date_end != '') {
            $date_config = DateConfig::join('listings', 'date_config.listing_id', 'id_listings')->whereBetween('date', [$this->date_init, $this->date_end])
                ->join('listing_pricings', 'listings.id_listings', 'listing_pricings.listing_id')
                ->where('date_config.listing_id', $this->listing_id)->get();
        } else {
            $date_config = DateConfig::join('listings', 'date_config.listing_id', 'id_listings')->where('date', $this->date_init)
                ->join('listing_pricings', 'listings.id_listings', 'listing_pricings.listing_id')
                ->where('date_config.listing_id', $this->listing_id)->get();
        }

        if (!$date_config) {
            return false;
        }

        foreach ($date_config as $key => $data) {
            $date[] = $data->date;
            DateConfig::where('id_date_config', $data->id_date_config)->update([
                'note' => $this->note,
            ]);
        }

        return $date;
    }
    
    public function showDate($date)
    {
        $dat = DateConfig::where('date', $date)->where('listing_id', $this->listing_id)->first();
        if ($dat == null) {
            $this->date_config_note = '';
        } else {
            $this->date_config_note = $dat->note;
        }
    }
}
