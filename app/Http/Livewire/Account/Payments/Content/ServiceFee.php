<?php

namespace App\Http\Livewire\Account\Payments\Content;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ServiceFee extends Component
{
    use LivewireAlert;

    public $settings;

    public function render()
    {
        $query = User::where(['id_user' => Auth::id() ])->pluck('service_fee')->first();
            $this->settings = $query;

        return view('livewire.account.payments.content.service-fee', compact('query'));
    }

    public function changeS()
    {
        if ( Auth::user()->service_fee === 'simplified')
            return;

        try {
            
            User::where([
                'id_user' => Auth::id(),
            ])->update([
                'service_fee' => 'simplified'
            ]);

            $this->alert('success', 'Update has been successful!');
            
        } catch (Exception $e) {

            $this->alert('error', 'Update has failed!');

        }
    }

    public function changeF()
    {
        if ( Auth::user()->service_fee === 'split-fee')
            return;
        
        try {
            
            User::where([
                'id_user' => Auth::id(),
            ])->update([
                'service_fee' => 'split-fee'
            ]);

            $this->alert('success', 'Update has been successful!');
            
        } catch (Exception $e) {

            $this->alert('error', 'Update has failed!');

        }
    }
}
