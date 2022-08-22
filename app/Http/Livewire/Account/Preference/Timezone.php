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

    public $timeZone;
    public $timeZoneShow;
    public $inputTimeZone;

    public function mount()
    {
        $this->timeZone = TimezoneModel::select('offset', 'name', 'diff_from_gtm')->get()->toArray();
        $this->inputTimeZone = Auth::user()->timezone_default;

        foreach ($this->timeZone as $key => $value) {
            if ( in_array($value['diff_from_gtm'], [ $this->inputTimeZone ]) ) {
                $this->timeZoneShow['offset'] = $value['offset'];
                $this->timeZoneShow['name'] = $value['name'];
                $this->timeZoneShow['diff_from_gtm'] = $value['diff_from_gtm'];
            }
        }
    }

    public function render()
    {

        return view('livewire.account.preference.timezone');
    }

    public function reloadInputsInvers()
    {
        foreach ($this->timeZone as $key => $value) {
            if ( in_array($value['diff_from_gtm'], [ $this->inputTimeZone ]) ) {
                $this->timeZoneShow['offset'] = $value['offset'];
                $this->timeZoneShow['name'] = $value['name'];
                $this->timeZoneShow['diff_from_gtm'] = $value['diff_from_gtm'];
            }
        }
    }

    public function submitTimezone()
    {      
        $validation = Validator::make([
           'timezone' => $this->inputTimeZone,
        ],[
            'timezone' => 'required|exists:timezones,diff_from_gtm',
        ]);

            if ($validation->fails()) {
                $validation->validate();
            }

        User::where([
            'id_user' => Auth::id(),
        ])->update([
            'timezone_default' => $this->inputTimeZone,
        ]);

        $this->reloadInputsInvers();
        $this->dispatchBrowserEvent('closedEditContainer');
        $this->alert('success', 'Update has been successful!');
    }
}