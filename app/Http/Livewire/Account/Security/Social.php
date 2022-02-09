<?php

namespace App\Http\Livewire\Account\Security;

use Auth;
use App\Models\User;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Social extends Component
{
    use LivewireAlert;

    public $facebook_id = null;
    public $google_id = null;

    public function render()
    {
        $social = User::where(['id_user' => Auth::id() ])->select('google_id', 'facebook_id')->first();

        $this->facebook_id = $social['facebook_id'];
        $this->google_id = $social['google_id'];

        return view('livewire.account.security.social', compact('social'));
    }

    public function disconnFace()
    {
        try {
            
            User::where([
                'id_user' => Auth::id(),
                'facebook_id' => $this->facebook_id,
            ])->update([
                'facebook_id' => null,
            ]);
            
            $this->alert('success', 'The disconnection has been successful!');
        
        } catch (Exception $e) {

            $this->alert('error', 'Update has failed!');

        }
    }

    public function disconnGoog()
    {
        try {
        
            User::where([
                'id_user' => Auth::id(),
                'google_id' => $this->google_id,
            ])->update([
                'google_id' => null,
            ]);

            $this->alert('success', 'The disconnection has been successful!');

        } catch (Exception $e) {

            $this->alert('error', 'Update has failed!');

        }
    }
}