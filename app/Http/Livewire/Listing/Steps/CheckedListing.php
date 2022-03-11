<?php

namespace App\Http\Livewire\Listing\Steps;

use App\Models\AmenitiesSafety;
use Auth;
use File;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class CheckedListing extends Component
{
    use LivewireAlert;

    public $listing;
    public $content = [];
    public $showImg = false;

    public function mount()
    {
        $name = explode(' ', Auth::user()->name );
        $last_name = explode(' ', Auth::user()->last_name );
        $folderAuth = Auth::user()->name . '-' . Auth::id();

        $this->content['name']      = $name[0];
        $this->content['last_name'] = $last_name[0];
        $this->content['avatar']    = Auth::user()->avatar;
        $this->content['title']     = $this->listing['placeTitle'];
        $this->content['comment']   = $this->listing['placeComment'];
        $this->content['location']  = $this->listing['location'];

        $this->content['guests']    = [
            $this->listing['guests']['guests'] == 1 ? 'Guest' : 'Guests' => $this->listing['guests']['guests'],
            $this->listing['guests']['beds'] == 1 ? 'Bed' : 'Beds' => $this->listing['guests']['beds'],
            $this->listing['guests']['bedrooms'] == 1 ? 'Bedroom' : 'Bedrooms' => $this->listing['guests']['bedrooms'],
            $this->listing['guests']['bathrooms'] == 1 ? 'Bathroom' : 'Bathrooms' => $this->listing['guests']['bathrooms'],
        ];

        $country  = $this->listing['address']['country'];
        $state    = $this->listing['address']['state'] != '' ? ' ' . $this->listing['address']['state'] . ' ' : ' ';
        $city     = $this->listing['address']['city'];
        $street   = $this->listing['address']['street'];
        $suite    = $this->listing['address']['suite'] != '' ? ' ' . $this->listing['address']['suite'] : '';
        $zip_code = $this->listing['address']['zip_code'] != '' ? ' ' . $this->listing['address']['zip_code'] . ' ' : ' ';
            $this->content['address'] = "Address: {$country}{$state}{$city}{$zip_code}{$street}{$suite}";

        if (File::exists( storage_path('app/public/uploadListing/' . $this->listing['photos'][0] ) ) ) {
            $this->content['img']       = count( $this->listing['photos'] ) != 0 ? $this->listing['photos'][0] : $this->listing['host'] ;
            
        }else{
            $imgFile = explode('-', $this->listing['photos'][0] );
            $this->showImg   = true;
            $this->content['img'] = $folderAuth . '/' . $imgFile[1];
        }

        $i = 0;

        $amenities = AmenitiesSafety::whereIn('code', array_merge( $this->listing['offers']['amenities'], $this->listing['offers']['safety'] ) )->pluck('name', 'code');
            foreach ($this->listing['offers']['amenities'] as $key => $value) {
                $this->content['amenities'][ $i ]['name'] = $amenities[ $value ];
                $this->content['amenities'][ $i ]['icon'] = $this->Icons( $value );
                $i++;
            }
            foreach ($this->listing['offers']['safety'] as $key => $value) {
                $this->content['amenities'][ $i ]['name'] = $amenities[ $value ];
                $this->content['amenities'][ $i ]['icon'] = $this->Icons( $value );
                $i++;
            }

        $this->emit('postAdded');
    }

    public function render()
    {
        return view('livewire.listing.steps.checked-listing');
    }
 
    public function returnBack($payload)
    {
        $this->emitUp('returnBack', $payload);
    }

    public function next()
    {
        $payload = [
            'to' => 'congratulations',
            'from' => 'checklisting',
            'img' => 'congratulations',
        ];
        
        $this->emitUp('next', $payload);
    }

    public function ShowImg($payload)
    {
        switch ( $payload ) {
            case 'apartment':
                return 's1.jpg';
                break;

            case 'house':
                return 's2.jpg';
                break;

            case 'secondary':
                return 's3.jpg';
                break;

            case 'unique':
                return 's4.jpg';
                break;

            case 'breakfast':
                return 's5.jpg';
                break;

            case 'boutique':
                return 's6.jpg';
                break;

            default:
                return 'listing.jpg';
                break;
        }
    }

    public function Icons($payload)
    {
        switch ( $payload ) {

            case 'pool':
                return 'pool-blu.svg';
                break;

            case 'hot_tub':
                return 'hot-blu.svg';
                break;

            case 'patio':
                return 'patio-blu.svg';
                break;

            case 'bbq_grill':
                return 'grill-blu.svg';
                break;

            case 'fire_pit':
                return 'fire-blu.svg';
                break;

            case 'pool_table':
                return 'table-blu.svg';
                break;

            case 'indoor_fireplace':
                return 'indoor-blu.svg';
                break;

            case 'outdoor_dining':
                return 'outdoor-blu.svg';
                break;

            case 'exercise_equipment':
                return 'exercise-blu.svg';
                break;



            case 'wifi':
                return 'wifi-blu.svg';
                break;

            case 'TV':
                return 'tv-blu.svg';
                break;

            case 'kitchen':
                return 'kitchen-blu.svg';
                break;

            case 'washer':
                return 'washer-blu.svg';
                break;

            case 'free_parking':
                return 'parking-blu.svg';
                break;

            case 'paid_parking':
                return 'paid-blu.svg';
                break;

            case 'air_conditioning':
                return 'air-blu.svg';
                break;

            case 'dedicated_worspace':
                return 'dedicated-blu.svg';
                break;

            case 'outdoor_shower':
                return 'shower-blu.svg';
                break;



            case 'smoke_alarm':
                return 'smoke-blu.svg';
                break;

            case 'first_kit':
                return 'first-blu.svg';
                break;

            case 'monoxide_alarm':
                return 'carbon-blu.svg';
                break;

            case 'fire_extinguisher':
                return 'extinguisher-blu.svg';
                break;
        }
    }
}