<?php

namespace App\Http\Livewire\Listing\Steps;

use Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use File;

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
        $this->content['guests']    = $this->listing['guests'];
        $this->content['location']  = $this->listing['location'];

        if (File::exists( storage_path('app/public/uploadListing/' . $this->listing['photos'][0] ) ) ) {
            $this->content['img']       = count( $this->listing['photos'] ) != 0 ? $this->listing['photos'][0] : $this->listing['host'] ;
        }else{
            $imgFile = explode('-', $this->listing['photos'][0] );
            $this->showImg   = true;
            $this->content['img'] = $folderAuth . '/' . $imgFile[1];
        }

        foreach ($this->listing['offers'] as $key => $value) {
            $this->content['amenities'][ $key ]['name'] = $value;
            $this->content['amenities'][ $key ]['icon'] = $this->Icons( $value );
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
            case 'Exercise equipment':
                return 'exercise-blu.svg';
                break;

            case 'Washer':
                return 'washer-blu.svg';
                break;

            case 'Outdoor shower':
                return 'shower-blu.svg';
                break;

            case 'Fire extinguisher':
                return 'extinguisher-blu.svg';
                break;

            case 'Pool':
                return 'pool-blu.svg';
                break;

            case 'Hot tub':
                return 'hot-blu.svg';
                break;


            case 'Patio':
                return 'patio-blu.svg';
                break;


            case 'Fire pit':
                return 'fire-blu.svg';
                break;


            case 'BBQ grill':
                return 'grill-blu.svg';
                break;


            case 'Pool table':
                return 'table-blu.svg';
                break;


            case 'Outdoor dining area':
                return 'outdoor-blu.svg';
                break;


            case 'Indoor fireplace':
                return 'indoor-blu.svg';
                break;


            case 'Wifi':
                return 'wifi-blu.svg';
                break;


            case 'TV':
                return 'tv-blu.svg';
                break;


            case 'Kitchen':
                return 'kitchen-blu.svg';
                break;


            case 'Free parking on premises':
                return 'parking-blu.svg';
                break;


            case 'Dedicated worspace':
                return 'dedicated-blu.svg';
                break;


            case 'Air conditioning':
                return 'air-blu.svg';
                break;


            case 'Paid parking on premises':
                return 'paid-blu.svg';
                break;


            case 'Smoke alarm':
                return 'smoke-blu.svg';
                break;


            case 'First aid kit':
                return 'first-blu.svg';
                break;


            case 'Caroom monoxide alarm':
                return 'carbon-blu.svg';
                break;
        }
    }
}