<?php

namespace App\Http\Livewire\Account\Security;

use Auth;
use App\Models\User;
use DB;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Desactivate extends Component
{
    use LivewireAlert;

    protected $listeners = [ 'confirmed' ];

    public function render()
    {
        return view('livewire.account.security.desactivate');
    }

    public function confirmed()
    {
        try {

            $session = DB::table('sessions')->where('user_id', auth()->id())->pluck('id');

                User::where([
                    'id_user' => Auth::id(),
                ])->update([
                    'acount_actived' => false
                ]);

            foreach ($session as $value)
                DB::table('sessions')->where('id', $value)->delete();

            $this->alert('success', 'Account has been successfully deactivated.');
            $this->emit('reloadDisableAccount');
            
        } catch (Exception $e) {

            $this->alert('error', 'There was a problem deactivating the account!');
            
        }
    }

    public function desactiveAccount()
    {
        $this->confirm('Are you sure you want to deactivate the account?', [
            'onConfirmed' => 'confirmed',
            'showConfirmButton' => true,
            'showCancelButton' => true,
            'cancelButtonText' => 'No!',
            'confirmButtonText' => 'Yes',
            'confirmButtonColor' => '#3085d6',
            'cancelButtonColor' => '#d33'
        ]);
    }
}


