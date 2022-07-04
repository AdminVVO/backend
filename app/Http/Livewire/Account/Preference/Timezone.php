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

    }

    public function render()
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
        return view('livewire.account.preference.timezone');
    }

    public function reloadInputsInvers()
    {
        $timezoneq = TimezoneModel::where('diff_from_gtm', $this->inputTimeZone )->select('offset', 'name', 'diff_from_gtm')->first();
            $this->timeZoneShow['offset'] = $timezoneq['offset'];
            $this->timeZoneShow['name'] = $timezoneq['name'];
            $this->timeZoneShow['diff_from_gtm'] = $timezoneq['diff_from_gtm'];
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

        // $this->reloadInputsInvers();
        $this->dispatchBrowserEvent('closedEditContainer');
        $this->alert('success', 'Update has been successful!');
    }
}