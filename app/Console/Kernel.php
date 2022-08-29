<?php

namespace App\Console;

use App\Models\Listing\Listings;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    public $email;
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $reser = Reservation::join('users', 'reservations.user_id', 'users.id_user')->whereIn('status', [5,4,3])->get(['email', 'listing_id'])->toArray();
        
        foreach($reser as $key => $row) {
            $listing = Listings::join('users', 'listings.user_id', 'users.id_user')->where('id_listings', $row['listing_id'])->first();
            $email[$key][] = $row['email'];
            $email[$key][] = $listing->name;
            $email[$key][] = $listing->avatar;
            $email[$key][] = $row['listing_id'];
        }
        
        $this->email = $email;
        $schedule->call(function () {
            foreach($this->email as $key => $data){
                \Mail::to( $data[0] )->send(new \App\Mail\SendMessageReviewMail( $data ));
            }
         })->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');

    }
}
