<?php

namespace Database\Seeders;

use App\Models\Listings;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::get()->toArray();
        $listing = Listings::leftJoin('listing_pricings', 'listings.id_listings', 'listing_pricings.listing_id')->first();

        $reservations = [
            [
                'id_reservation' => Str::uuid(),
                'status' => (int) 0,
                'reservation_amount' => 0.0,
                'total_payout' => $listing->base_price * 6,
                'checkin' => '2022-08-12',
                'checkout' => '2022-08-18',
                'booked' => '2022-07-12 22:04:21',
                'user_id' => $user[0]['id_user'],
                'listing_id' => $listing->id_listings,
                'note' => 'hola 1',
            ],

            [
                'id_reservation' => Str::uuid(),
                'status' => (int) 1,
                'reservation_amount' => 0.0,
                'total_payout' => $listing->base_price * 5,
                'checkin' => '2022-08-13',
                'checkout' => '2022-08-18',
                'booked' => '2022-05-25 09:04:21',
                'user_id' => $user[1]['id_user'],
                'listing_id' => $listing->id_listings,
                'note' => 'hola 2',
            ],

            [
                'id_reservation' => Str::uuid(),
                'status' => (int) 2,
                'reservation_amount' => 0.0,
                'total_payout' => $listing->base_price * 6,
                'checkin' => '2022-08-20',
                'checkout' => '2022-08-25',
                'booked' => '2022-08-08 13:04:21',
                'user_id' => $user[2]['id_user'],
                'listing_id' => $listing->id_listings,
                'note' => 'hola 3',
            ],

            [
                'id_reservation' => Str::uuid(),
                'status' => (int) 3,
                'reservation_amount' => 0.0,
                'total_payout' => $listing->base_price * 5,
                'checkin' => '2022-08-25',
                'checkout' => '2022-08-30',
                'booked' => '2022-08-03 13:04:21',
                'user_id' => $user[0]['id_user'],
                'listing_id' => $listing->id_listings,
                'note' => 'hola 4',
            ],

            [
                'id_reservation' => Str::uuid(),
                'status' => (int) 4,
                'reservation_amount' => 0.0,
                'total_payout' => $listing->base_price * 6,
                'checkin' => '2022-08-01',
                'checkout' => '2022-08-08',
                'booked' => '2022-08-10 12:04:21',
                'user_id' => $user[1]['id_user'],
                'listing_id' => $listing->id_listings,
                'note' => 'hola 5',
            ],

            [
                'id_reservation' => Str::uuid(),
                'status' => (int) 5,
                'reservation_amount' => 0.0,
                'total_payout' => $listing->base_price * 4,
                'checkin' => '2022-08-22',
                'checkout' => '2022-08-25',
                'booked' => '2022-08-13 11:04:21',
                'user_id' => $user[2]['id_user'],
                'listing_id' => $listing->id_listings,
                'note' => 'hola 6',
            ],

            [
                'id_reservation' => Str::uuid(),
                'status' => (int) 6,
                'reservation_amount' => 0.0,
                'total_payout' => $listing->base_price * 5,
                'checkin' => '2022-08-15',
                'checkout' => '2022-08-20',
                'booked' => '2022-08-13 15:04:21',
                'user_id' => $user[0]['id_user'],
                'listing_id' => $listing->id_listings,
                'note' => 'hola 7',
            ]
        ];

        foreach ($reservations as $key => $reservation) {
            Reservation::create($reservation);
        }
    }
}
