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
                'total_payout' => $listing->base_price * 5,
                'checkin' => '2022-09-18',
                'checkout' => '2022-09-23',
                'booked' => '2022-09-12 22:04:21',
                'user_id' => $user[0]['id_user'],
                'listing_id' => $listing->id_listings,
                'note' => 'hola 1',
            ],

            [
                'id_reservation' => Str::uuid(),
                'status' => (int) 1,
                'reservation_amount' => 0.0,
                'total_payout' => $listing->base_price * 3,
                'checkin' => '2022-09-24',
                'checkout' => '2022-09-27',
                'booked' => '2022-09-25 09:04:21',
                'user_id' => $user[2]['id_user'],
                'listing_id' => $listing->id_listings,
                'note' => 'hola 2',
            ],

            [
                'id_reservation' => Str::uuid(),
                'status' => (int) 2,
                'reservation_amount' => 0.0,
                'total_payout' => $listing->base_price * 3,
                'checkin' => '2022-09-27',
                'checkout' => '2022-09-30',
                'booked' => '2022-09-08 13:04:21',
                'user_id' => $user[2]['id_user'],
                'listing_id' => $listing->id_listings,
                'note' => 'hola 3',
            ],

            [
                'id_reservation' => Str::uuid(),
                'status' => (int) 3,
                'reservation_amount' => 0.0,
                'total_payout' => $listing->base_price * 3,
                'checkin' => '2022-09-13',
                'checkout' => '2022-09-16',
                'booked' => '2022-09-03 13:04:21',
                'user_id' => $user[0]['id_user'],
                'listing_id' => $listing->id_listings,
                'note' => 'hola 4',
            ],

            [
                'id_reservation' => Str::uuid(),
                'status' => (int) 4,
                'reservation_amount' => 0.0,
                'total_payout' => $listing->base_price * 6,
                'checkin' => '2022-09-19',
                'checkout' => '2022-09-25',
                'booked' => '2022-09-10 12:04:21',
                'user_id' => $user[2]['id_user'],
                'listing_id' => $listing->id_listings,
                'note' => 'hola 5',
            ],

            [
                'id_reservation' => Str::uuid(),
                'status' => (int) 5,
                'reservation_amount' => 0.0,
                'total_payout' => $listing->base_price * 3,
                'checkin' => '2022-09-22',
                'checkout' => '2022-09-25',
                'booked' => '2022-09-13 11:04:21',
                'user_id' => $user[1]['id_user'],
                'listing_id' => $listing->id_listings,
                'note' => 'hola 6',
            ],

            [
                'id_reservation' => Str::uuid(),
                'status' => (int) 6,
                'reservation_amount' => 0.0,
                'total_payout' => $listing->base_price * 5,
                'checkin' => '2022-09-15',
                'checkout' => '2022-09-20',
                'booked' => '2022-09-13 15:04:21',
                'user_id' => $user[1]['id_user'],
                'listing_id' => $listing->id_listings,
                'note' => 'hola 7',
            ]
        ];

        foreach ($reservations as $key => $reservation) {
            Reservation::create($reservation);
        }
    }
}
