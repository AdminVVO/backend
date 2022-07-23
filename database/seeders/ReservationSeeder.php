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
        $user = User::first();
        $listing = Listings::first();

        $reservations = [
            [
                'id_reservation' => Str::uuid(),
                'status' => (int) 0,
                'reservation_amount' => 0.0,
                'total_payout' => 24.9,
                'checkin' => '2022-05-15',
                'checkout' => '2022-05-18',
                'booked' => '2022-07-12 22:04:21',
                'user_id' => $user->id_user,
                'listing_id' => $listing->id_listings,
            ],

            [
                'id_reservation' => Str::uuid(),
                'status' => (int) 1,
                'reservation_amount' => 0.0,
                'total_payout' => 25.9,
                'checkin' => '2022-05-18',
                'checkout' => '2022-05-20',
                'booked' => '2022-05-25 09:04:21',
                'user_id' => $user->id_user,
                'listing_id' => $listing->id_listings,
            ],

            [
                'id_reservation' => Str::uuid(),
                'status' => (int) 2,
                'reservation_amount' => 0.0,
                'total_payout' => 26.9,
                'checkin' => '2022-05-20',
                'checkout' => '2022-05-25',
                'booked' => '2022-05-08 13:04:21',
                'user_id' => $user->id_user,
                'listing_id' => $listing->id_listings,
            ],

            [
                'id_reservation' => Str::uuid(),
                'status' => (int) 3,
                'reservation_amount' => 0.0,
                'total_payout' => 27.9,
                'checkin' => '2022-05-25',
                'checkout' => '2022-05-30',
                'booked' => '2022-06-03 13:04:21',
                'user_id' => $user->id_user,
                'listing_id' => $listing->id_listings,
            ],

            [
                'id_reservation' => Str::uuid(),
                'status' => (int) 4,
                'reservation_amount' => 0.0,
                'total_payout' => 28.9,
                'checkin' => '2022-06-01',
                'checkout' => '2022-06-08',
                'booked' => '2022-06-10 12:04:21',
                'user_id' => $user->id_user,
                'listing_id' => $listing->id_listings,
            ],

            [
                'id_reservation' => Str::uuid(),
                'status' => (int) 5,
                'reservation_amount' => 0.0,
                'total_payout' => 29.9,
                'checkin' => '2022-06-08',
                'checkout' => '2022-06-14',
                'booked' => '2022-07-16 11:04:21',
                'user_id' => $user->id_user,
                'listing_id' => $listing->id_listings,
            ],

            [
                'id_reservation' => Str::uuid(),
                'status' => (int) 6,
                'reservation_amount' => 0.0,
                'total_payout' => 30.9,
                'checkin' => '2022-06-15',
                'checkout' => '2022-06-20',
                'booked' => '2022-07-13 15:04:21',
                'user_id' => $user->id_user,
                'listing_id' => $listing->id_listings,
            ]
        ];
        foreach ($reservations as $key => $reservation) {
            Reservation::create($reservation);
        }
    }
}
