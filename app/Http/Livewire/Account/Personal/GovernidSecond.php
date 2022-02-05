<?php

namespace App\Http\Livewire\Account\Personal;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Storage;

class GovernidSecond extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public $photo;

    public function render()
    {
        return view('livewire.account.personal.governid-second');
    }

    public function saveFile()
    {
        $validation = Validator::make([
           'photo' => $this->photo,
        ],[
            'photo' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

            if ($validation->fails())
                $validation->validate();

        try {

            $code_exist = true;
            while ($code_exist) {
                $nameFile = Str::random();
                $query_if_exist = User::where(['govermen_id' => $nameFile])->get();
                ($query_if_exist && count($query_if_exist) > 0) ? $code_exist = true : $code_exist = false;
            }

            $extensionFile = $this->photo->extension();

            if ( Auth::user()->govermen_id != null )
                Storage::disk('public')->delete( 'GovernID/' . Auth::user()->govermen_id );

            $this->photo->storeAs('GovernID', $nameFile . '.' . $extensionFile, 'public');

            User::where([
                'id_user' => Auth::id(),
            ])->update([
                'govermen_id' => $nameFile . '.' . $extensionFile,
            ]);

            $this->flash('success', 'Successfully submitted Government ID', [], route('personal_info'));

        } catch (Exception $e) {

            $this->alert('error', 'Failed to save', [
                'text' => 'There was a problem performing the operation',
            ]);

        }
    }
}
