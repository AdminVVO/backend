<?php

namespace App\Http\Livewire\ListingTest\Location;

use App\Models\Listing\ListingLocation;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Auth;

class ListingSharing extends Component
{
    use LivewireAlert;

    public $listingId;
    public $sharing;
    public $privacy;
    public $latitude;
    public $longitude;
    public $inputSharing;
    public $inputPrivacy;
    public $inputLatitude;
    public $inputLongitude;

    protected $listeners = [
        'latlong' => 'latlong'
    ];

    public function mount()
    {
        $this->inputSharing = $this->sharing;
        $this->inputPrivacy = $this->privacy;
        $this->inputLatitude = $this->latitude;
        $this->inputLongitude = $this->longitude;
    }

    public function render()
    {
        return view('livewire.listing-test.location.listing-sharing');
    }

    public function latlong( $latitud, $longitud )
    {
        $this->inputLatitude = $latitud;
        $this->inputLongitude = $longitud;
    }

    public function reloadInputs()
    {
        $this->inputSharing = $this->sharing;
        $this->inputPrivacy = $this->privacy;
        $this->inputLatitude = $this->latitude;
        $this->inputLongitude = $this->longitude;

        $this->dispatchBrowserEvent('refreshMapbox', [
            'latitude' => $this->inputLatitude,
            'longitude' => $this->inputLongitude,
        ]);
    }

    public function reloadInputsInvers()
    {
        $this->sharing = $this->inputSharing;
        $this->privacy = $this->inputPrivacy;
        $this->latitude = $this->inputLatitude;
        $this->longitude = $this->inputLongitude;
    }

    public function SubmitSharing()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputSharing'  => $this->inputSharing,
        ],[
            'inputSharing'  => 'required|in:Specific location,Range location',
        ]);

            if ($validation->fails())
                return $this->alert('warning', 'Validation has failed.');
        
        ListingLocation::where([
            'user_id'    => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'location_sharing'      => $this->inputSharing,
            'privacy_cancellations' => $this->inputPrivacy,
            'latitude'              => $this->inputLatitude,
            'longitude'             => $this->inputLongitude,
        ]);

        $this->emitTo('listing-test.right-details', 'reloadSubmit', 'location');
        $this->dispatchBrowserEvent('refreshMapbox', [
            'latitude' => $this->inputLatitude,
            'longitude' => $this->inputLongitude,
        ]);
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
