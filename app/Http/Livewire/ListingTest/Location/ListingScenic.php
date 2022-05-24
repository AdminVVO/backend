<?php

namespace App\Http\Livewire\ListingTest\Location;

use App\Models\Listing\ListingLocation;
use App\Models\ScenicViews;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingScenic extends Component
{
    use LivewireAlert;

    public $listingId;
    public $scenic;
    public $inputScenic = [];
    public $scenicViews;

    public function mount()
    {
        $this->inputScenic = $this->scenic;
        $this->scenicViews = ScenicViews::pluck('name','code');
    }

    public function render()
    {
        return view('livewire.listing-test.location.listing-scenic');
    }

    public function reloadInputs()
    {
        $this->inputScenic = $this->scenic;
    }

    public function reloadInputsInvers()
    {
        $this->scenic = $this->inputScenic;
    }

    public function SubmitScenic()
    {      
        $this->resetValidation();    

        if ( count( $this->inputScenic ) != 0 ) {
            $validation = Validator::make([
               'inputScenic'  => $this->inputScenic,
            ],[
                'inputScenic'  => 'required',
                'inputScenic.*'  => 'exists:scenic_views,code',
            ]);

                if ($validation->fails())
                    return $this->alert('warning', 'Validation has failed!');
        }
        
        ListingLocation::where([
            'user_id'    => Auth::id(),
            'listing_id' => $this->listingId,
        ])->update([
            'scenic_views' => $this->inputScenic,
        ]);

        $this->emitTo('listing-test.right-details', 'reloadSubmit', 'location');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
