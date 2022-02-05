<?php

namespace App\Http\Livewire\Account\Preference;

use App\Models\User;
use App\Models\Timezone as TimezoneModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Timezone extends Component
{
    use LivewireAlert;

    public $timezone = null;
    public $timezoneFormt = [];
    public $classActive = false;
    public $qtimezone = [];

    public function mount()
    {
        $this->timezone = Auth::user()->timezone_default;
    }

    public function render()
    {
        $this->qtimezone = TimezoneModel::select('offset', 'name', 'diff_from_gtm')->get();

        foreach ($this->qtimezone as $key => $value) {
            if ( in_array($value['offset'], [ $this->timezone ]) ) {
                $this->timezoneFormt['offset'] = $value['offset'];
                $this->timezoneFormt['name'] = $value['name'];
                $this->timezoneFormt['diff_from_gtm'] = $value['diff_from_gtm'];
            }
        }

        return view('livewire.account.preference.timezone');
    }

    public function statusUpdate()
    {
        $this->resetInput();
        $this->timezone = Auth::user()->timezone_default;
    }

    public function changeTimezone($payload)
    {
        $this->timezone = $payload;
    }

    public function submitTimezone()
    {   
        $validation = Validator::make([
           'timezone' => $this->timezone,
        ],[
            'timezone' => 'required|exists:timezones,offset',
        ]);

            if ($validation->fails())
                $validation->validate();

        try {

            User::where([
                'id_user' => Auth::id(),
            ])->update([
                'timezone_default' => $this->timezone,
            ]);

            $this->resetInput();
            $this->alert('success', 'Update has been successful!');
            
        } catch (Exception $e) {

            $this->resetInput();
            $this->alert('error', 'Update has failed!');

        }
    }

    private function resetInput()
    {
        $this->classActive = !$this->classActive; 
        $this->timezone = null;
        $this->resetValidation();
    }
}
