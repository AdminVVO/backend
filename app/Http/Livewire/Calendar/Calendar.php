<?php

namespace App\Http\Livewire\Calendar;

use App\Models\DateConfig;
use App\Models\Listing\Listings;
use App\Models\Reservation;
use App\Models\ReservationUser;
use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Auth;

class Calendar extends Component
{
    public $note = '';
    public $date_config_note = '';
    public $show_modal = 0;
    public $show_modal_info = 0;
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
    public $price = 0;
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
            'photos',
            'listings.created_at as created_at'
        )
            ->leftJoin('listing_pricings', 'listings.id_listings', 'listing_pricings.listing_id')
            ->where([
                'listings.user_id' => Auth::id()
            ])->when(isset($this->search), function ($listings) {
                return $listings->where('title', 'like', '%' . $this->search . '%');
            })->get()->toArray();
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
            $this->listings[$key]['listingFile'] = 'storage/photos-listing/' . \App\Models\Listing\Listings::ListingFile( $value['id_listings'] ) . '/' . $value['photos'][0]['name'];
        }

        $reservations = ReservationUser::join('users', 'reservation_users.user_id', 'users.id_user')
            ->join('listings', 'reservation_users.listing_id', 'listings.id_listings')
            ->whereIn('listing_id', $listings_id)->get(['code_reservation', 'listing_id', 'name', 'total_amount', 'date_in', 'date_out', 'id_reservation_users', 'reservation_users.status', 'private_note'])->toArray();
            $date_config = DateConfig::whereIn('listing_id', $listings_id)->join('listings', 'date_config.listing_id', 'listings.id_listings')->orderBy('date')->get(['is_active', 'listing_id', 'price', 'date', 'id_listings'])->toArray();
        foreach ($date_config as $key => $data) {
            $this->date_config[$data['id_listings']][$data['date']] = [
                'price' => $data['price'],
                'listing_id' => $data['listing_id'],
                'is_active' => $data['is_active'],
                'listing' => $data['id_listings']
            ];
        }

        foreach ($reservations as $key => $data) {
            $this->reservation[] = [
                'resourceId' => $data['listing_id'],
                'title' => $data['name'],
                'total_payout' => $data['total_amount'],
                'start' => $data['date_in'],
                'end' => $data['date_out'],
                'description' => 'description',
                'reservId' => $data['id_reservation_users'],
                'status' => $data['status'],
                'code_reservation' => substr($data['code_reservation'], -4),
            ];

            if (date('y-m-d', time()) > Carbon::parse($data['date_in'])->format('y-m-d')) {
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
        $reservation = ReservationUser::where('id_reservation_users', $reservation_id)
            ->with([
                'Listings:id_listings,title',
                'User:id_user,name,last_name,avatar',
                'StatusReserv:status,name,color',
            ])->first()->toArray();
        $day = (new Carbon(now()))->diff($reservation['date_in'])->format("%r%a");
        
        $day_dif = $day > 0 ? 'Arriving in ' . $day . ' days -' : '';
        $this->findReservation = [
            'id_reservation' => $reservation['id_reservation_users'],
            'listing_id' => $reservation['listing_id'],
            'arriving' => $day_dif,
            'checkin' => Carbon::parse($reservation['date_in'])->isoFormat('ddd, MMM D'),
            'checkout' => Carbon::parse($reservation['date_out'])->isoFormat('ddd, MMM D'),
            'nights' => Carbon::parse($reservation['date_out'])->diffInDays($reservation['date_in']),
            'total_amount' => $reservation['total_amount'],
            'user_id' => $reservation['user_id'],
            'name' => $reservation['user']['name'],
            'guest' => $reservation['guest']['total'],
            'total_comming' => $reservation['guest']['total'],
            'avatar' => $reservation['user']['avatar'],
            'note' => $reservation['private_note'],
            'code_reservation' => $reservation['code_reservation'],
        ];
    }

    public function DateConfig()
    {
        if ($this->date_init == '') {
            return;
        }
        $dates = $this->UpdateDateConfig();
        $this->CreateDateConfig($dates);
        $this->reset('price');
        $this->render();
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

        if ($this->available == true && $this->date_end == '' && ($this->price == 0 || $this->price == '' || $this->price == null)) {
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
                DateConfig::where('id_date_config', $data->id_date_config)->update([
                    'is_active' => $this->available,
                    'price' => $this->price,
                ]);
            } else if ($this->available && ($this->price == 0 || $this->price == '')) {

                DateConfig::where('id_date_config', $data->id_date_config)->update([
                    'is_active' => $this->available,
                    'price' => $data->base_price,
                ]);
            } else {
                DateConfig::where('id_date_config', $data->id_date_config)->update([
                    'is_active' => $this->available,
                    'price' => 0,
                ]);
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

    public function showDate($date, $id)
    {
        $dat = DateConfig::where('date', $date)->where('listing_id', $id)->first();
        if ($dat == null) {
            $this->date_config_note = '';
        } else {
            $this->date_config_note = $dat->note;
        }
    }
}
