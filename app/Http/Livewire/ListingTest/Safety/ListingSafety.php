<?php

namespace App\Http\Livewire\ListingTest\Safety;

use App\Models\AmenitiesSafety;
use App\Models\Listing\Listings;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListingSafety extends Component
{
    use LivewireAlert;

    public $listingId;
    public $safety;
    public $inputSafety = [];
    public $arraySafety;

    public function mount()
    {
        $this->inputSafety = $this->safety;
        $this->arraySafety = AmenitiesSafety::where('type', 'safety')->pluck('name','code');
    }

    public function render()
    {
        return view('livewire.listing-test.safety.listing-safety');
    }

    public function reloadInputs()
    {
        $this->inputSafety = $this->safety;
    }

    public function reloadInputsInvers()
    {
        $this->safety = $this->inputSafety;
    }

    public function SubmitSafety()
    {      
        if ( count( $this->inputSafety ) != 0 ) {
            $validation = Validator::make([
               'inputSafety'  => $this->inputSafety,
            ],[
                'inputSafety'  => 'required',
                'inputSafety.*' => 'exists:amenities_safeties,code',
            ]);

                if ($validation->fails())
                    return $this->alert('warning', 'Validation has failed!');
        }
        
        Listings::where([
            'user_id'     => Auth::id(),
            'id_listings' => $this->listingId,
        ])->update([
            'safety' => $this->inputSafety,
        ]);

        $this->emitTo('listing-test.right-details', 'reloadSubmit', 'basic');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
