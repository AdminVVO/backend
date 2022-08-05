<?php

namespace App\Http\Livewire\Calendar;

use Livewire\Component;
use Carbon\Carbon;

class Calendar extends Component
{
    public $listings = [];
    public $reservation = [];
    public $display = '';
    public $days = '';

    public function mount()
    {
        $listings = [
            [
                "id_listings" => "13546ee4-eb1c-4d8f-8e5c-8f343722dfd2",
                "title" => "Lista nº1",
                "internal_title" => "Lista-1 HOUSE",
                "base_price" => "50",
                "listing_currency" => "USD"
            ],
            [
                "id_listings" => "20846eg5-eb1c-4d8f-8e5c-8f343722dfd2",
                "title" => "Lista nº2",
                "internal_title" => "Lista-2 HOUSE",
                "base_price" => "80",
                "listing_currency" => "USD"
            ]
        ];

        $reservations = [
            [
                "listing_id" => "13546ee4-eb1c-4d8f-8e5c-8f343722dfd2",
                "name" => "Michael J. Turner",
                "checkin" => "2022-08-02",
                "checkout" => "2022-08-07",
                "id_reservation" => "4975ea3e-819a-4c10-9e2a-ca08d362e329",
                "status" => 0
            ],
            [
                "listing_id" => "13546ee4-eb1c-4d8f-8e5c-8f343722dfd2",
                "name" => "Stephan E. Kimes",
                "checkin" => "2022-08-05",
                "checkout" => "2022-08-09",
                "id_reservation" => "4975ea3e-819a-4c10-9e2a-ca08d362e329",
                "status" => 1
            ],
            [
                "listing_id" => "13546ee4-eb1c-4d8f-8e5c-8f343722dfd2",
                "name" => "John L. Jackson",
                "checkin" => "2022-08-15",
                "checkout" => "2022-08-20",
                "id_reservation" => "4975ea3e-819a-4c10-9e2a-ca08d362e329",
                "status" => 2
            ],
            [
                "listing_id" => "13546ee4-eb1c-4d8f-8e5c-8f343722dfd2",
                "name" => "Gladys G. Malone",
                "checkin" => "2022-08-10",
                "checkout" => "2022-08-14",
                "id_reservation" => "4975ea3e-819a-4c10-9e2a-ca08d362e329",
                "status" => 3
            ],
            [
                "listing_id" => "13546ee4-eb1c-4d8f-8e5c-8f343722dfd2",
                "name" => "Darlene M. Garcia",
                "checkin" => "2022-08-09",
                "checkout" => "2022-08-13",
                "id_reservation" => "4975ea3e-819a-4c10-9e2a-ca08d362e329",
                "status" => 4
            ],
            [
                "listing_id" => "20846eg5-eb1c-4d8f-8e5c-8f343722dfd2",
                "name" => "Robert A. Wright",
                "checkin" => "2022-08-11",
                "checkout" => "2022-08-15",
                "id_reservation" => "4975ea3e-819a-4c10-9e2a-ca08d362e329",
                "status" => 5
            ],
            [
                "listing_id" => "20846eg5-eb1c-4d8f-8e5c-8f343722dfd2",
                "name" => "Jennifer L. Walker",
                "checkin" => "2022-08-01",
                "checkout" => "2022-08-05",
                "id_reservation" => "4975ea3e-819a-4c10-9e2a-ca08d362e329",
                "status" => 6
            ],
            [
                "listing_id" => "20846eg5-eb1c-4d8f-8e5c-8f343722dfd2",
                "name" => "Norma T. Nix",
                "checkin" => "2022-08-25",
                "checkout" => "2022-08-30",
                "id_reservation" => "4975ea3e-819a-4c10-9e2a-ca08d362e329",
                "status" => 6
            ],
            [
                "listing_id" => "20846eg5-eb1c-4d8f-8e5c-8f343722dfd2",
                "checkin" => "2022-08-20",
                "display" => false,
            ]
        ];


        foreach ($reservations as $key => $data) {

            if (isset($data['display'])) {
                $this->reservation[] = [
                    'resourceId' => $data['listing_id'],
                    'start' => $data['checkin'],
                    'display' => $data['checkin'],
                    "overlap" => false,
                    "editable" => false,
                ];
            } else {
                $this->reservation[] = [
                    'resourceId' => $data['listing_id'],
                    'title' => $data['name'],
                    'start' => $data['checkin'],
                    'end' => $data['checkout'],
                    'description' => 'hola',
                    'reservId' => $data['id_reservation'],
                    'backgroundColor' => $data['status']
                ];
            }

            if (date('y-m-d', time()) > Carbon::parse($data['checkin'])->format('y-m-d')) {
                $this->reservation[$key] = array_merge($this->reservation[$key], ['editable' => false]);
            }
        };
        foreach ($listings as $key => $value) {
            $this->listings[$key]['title'] = $value['title'];
            $this->listings[$key]['id'] = $value['id_listings'];
            $this->listings[$key]['base_price'] = $value['base_price'];
            $this->listings[$key]['listing_currency'] = $value['listing_currency'];
            $this->listings[$key]['imgUri'] = `<img src="{{ URL::asset('assets/img/anality.jpg')}}" alt="">`;
        }
    }

    public function render()
    {
        return view('livewire.calendar.calendar');
    }

    public function selectListing($payload)
    {
        dd($payload);
    }
}
