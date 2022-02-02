<?php

namespace App\Http\Livewire\Account\Payments\Content;

use Livewire\Component;

class Payouts extends Component
{
    public $showModal = false;
    public $modalOne = true;
    public $modalTwo = false;
    public $modalTree = false;
    public $modalFoor = false;
    public $country = null;
    public $billing = null;
    public $infoSave = [];

    public function render()
    {
        return view('livewire.account.payments.content.payouts');
    }

    public function submitOne()
    {
        $this->modalOne = false;

        switch ( $this->billing ) {
            case 'bank':
                $this->modalTree = true;
                break;

            case 'payonner':
                $this->modalFoor = true;
                break;
            
            default:
                $this->modalTwo = true;
                break;
        }

        $this->infoSave = [
            'country' => $this->country,
            'billing' => $this->billing,
        ];
    }

    public function backHome()
    {
        $this->resetVal();
        $this->showModal = true;
    }

    public function showModal()
    {
        $this->resetVal();
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->resetVal();
        $this->showModal = false;
    }
    
    public function resetVal()
    {
        $this->resetValidation();
        $this->showModal = false;
        $this->modalOne = true;
        $this->modalTwo = false;
        $this->modalTree = false;
        $this->modalFoor = false;
        $this->country = null;
        $this->billing = null;
        $this->infoSave = [];
    }
}
