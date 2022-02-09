<?php

namespace App\Http\Livewire\Account\Personal;

use App\Http\Controllers\Twilio;
use App\Models\CodeVerification;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Phone extends Component
{
    use LivewireAlert;

    public $phone = null;
    public $phoneEdit = null;
    public $confirmCode = null;
    public $classActive = false;
    public $showInput = false;
    public $VerifyInput = false;

    protected $listeners = ['submitEvent' => 'submitEvent', 'submitConfirm' => 'submitConfirm'];

    public function render()
    {
        $qphone = User::where([ 'id_user' => Auth::id() ])->select('phone', 'other_phone')->first();
        
        if ( $qphone['phone'] == null )
            $this->showInput = true;

        return view('livewire.account.personal.phone', compact('qphone'));
    }

    public function statusUpdate()
    {
        $this->resetValidation();
        $this->resetInput();
    }

    public function submitEvent($payload)
    {   
        $this->phone = $payload;

        $validation = Validator::make([
           'phone' => $this->phone,
        ],[
            'phone' => 'required|min:6',
        ]);

            if ($validation->fails()) {
                $validation->validate();
            }

        $query = User::where([ 'id_user' => Auth::id() ])->select('phone', 'other_phone')->first();

            if ( $query['phone'] == $this->phone || $query['other_phone'] == $this->phone ){
                $this->resetInput();
                return;
            }

        try {

            $code_exist = true;
            while ($code_exist) {
                $verification_code = rand(100000,999999);
                $query_if_exist = CodeVerification::where([ 'code' => $verification_code])->get();
                ($query_if_exist && count($query_if_exist) > 0) ? $code_exist = true : $code_exist = false;
            }

            Twilio::sendMessage( $verification_code, $this->phone );

            CodeVerification::updateOrCreate(
                [ 'to' => $this->phone ],
                [ 'code' => $verification_code ]
            );

            $this->VerifyInput = true;
            $this->confirmCode = null;

            $this->alert('success', 'Verification code has been sent to ' . $this->phone);
            
        } catch (Exception $e) {

            $this->resetInput();
            $this->alert('error', 'An error occurred while sending the verification code.!');

        }
    }

    public function submitConfirm()
    {
        $validation = Validator::make([
           'confirm_code' => $this->confirmCode,
        ],[
            'confirm_code' => 'required|digits:6|exists:code_verifications,code',
        ]);
            if ($validation->fails())
                $validation->validate();

        try {

            CodeVerification::where('code', $this->confirmCode )->forceDelete();

            $query = User::where([ 'id_user' => Auth::id() ])->select('phone', 'other_phone')->first();

            if ( $this->phoneEdit === null ) {

                if ( $query['phone'] == null ) {
                    User::where([
                        'id_user' => Auth::id(),
                    ])->update([
                        'phone' => $this->phone
                    ]);
                }else{
                    User::where([
                        'id_user' => Auth::id(),
                    ])->update([
                        'other_phone' => [$this->phone]
                    ]);
                }
            }else{

                if ( $query['phone'] == $this->phoneEdit ) {
                    User::where([
                        'id_user' => Auth::id(),
                    ])->update([
                        'phone' => $this->phone
                    ]);
                }else{
                    User::where([
                        'id_user' => Auth::id(),
                    ])->update([
                        'other_phone' => [$this->phone]
                    ]);
                }
            }

            $this->resetInput();
            $this->alert('success', 'Update has been successful!');
            
        } catch (Exception $e) {

            $this->resetInput();
            $this->alert('error', 'Update has failed!');

        }
    }

    public function resentCode()
    {
        $this->resetValidation();

        try {

            $code_exist = true;
            while ($code_exist) {
                $verification_code = rand(100000,999999);
                $query_if_exist = CodeVerification::where([ 'code' => $verification_code])->get();
                ($query_if_exist && count($query_if_exist) > 0) ? $code_exist = true : $code_exist = false;
            }

            Twilio::sendMessage( $verification_code, $this->phone );

            CodeVerification::updateOrCreate(
                [ 'to' => $this->phone ],
                [ 'code' => $verification_code ]
            );
            
            $this->confirmCode = '';
            $this->alert('success', 'Verification code has been resent to ' . $this->phone );
            
        } catch (Exception $e) {

            $this->resetInput();
            $this->alert('error', 'An error occurred while sending the verification code.!');

        }

    }

    public function editNumber($payload)
    {
        $this->phoneEdit = $payload;
        $this->phone = $payload;
        $this->showInput = true;
    }

    public function addOtherNumber()
    {
        $this->showInput = true;
    }

    private function resetInput()
    {
        $this->classActive = !$this->classActive; 
        $this->phone = null;
        $this->confirmCode = null;
        $this->phoneEdit = null;
        $this->showInput = false;
        $this->VerifyInput = false;
    }
}
