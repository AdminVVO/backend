<?php

namespace App\Http\Livewire\ListingTest\Basic;

use App\Models\Listing\Listings;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Auth;

class ListingLanguage extends Component
{
    use LivewireAlert;

    public $listingId;
    public $language;
    public $language_default;
    public $inputLanguage;

    public function mount()
    {
        $this->inputLanguage = $this->language_default;
    }

    public function render()
    {
        return view('livewire.listing-test.basic.listing-language');
    }

    public function reloadInputs()
    {
        $this->inputLanguage = $this->language_default;
    }

    public function reloadInputsInvers()
    {
        $this->language_default = $this->inputLanguage;
    }

    public function SubmitLanguage()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputLanguage' => $this->inputLanguage,
        ],[
            'inputLanguage' => 'required|exists:languages_regions,code',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        Listings::where([
            'user_id'     => Auth::id(),
            'id_listings' => $this->listingId,
        ])->update([
            'language_default' => $this->inputLanguage,
        ]);

        $this->emitTo('listing-test.right-details', 'reloadSubmit', 'basic');
        $this->reloadInputsInvers();
        $this->alert('success', 'Update has been successful!');
    }
}
