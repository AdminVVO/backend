<?php

namespace App\Http\Livewire;

use Livewire\Component;
use DB;
use Jenssegers\Agent\Agent;
use Session;

class LoginSecurityDevicesComponent extends Component
{
    public function render()
    {
        $agent = new Agent();
        $devices = [];

        $sessions = DB::table('sessions')
            ->where('user_id', auth()->id())
            ->orderBy('last_activity', 'DESC')
            ->get();

        foreach ($sessions as $key => $value) {
            $devices[ $key ]['id'] = $value->id;
            $devices[ $key ]['ip_address'] = $value->ip_address;
            $devices[ $key ]['last_activity'] = $value->last_activity;
            $devices[ $key ]['actived'] = Session::getId() == $value->id ? true : false ;

                $agent->setUserAgent( $value->user_agent );
                    $devices[ $key ]['platform'] = $agent->platform();
                    $devices[ $key ]['browser'] = $agent->browser();
                    $devices[ $key ]['classIcon'] = "fas fa-desktop";
                        if ( $agent->isMobile() || $agent->isTablet() )
                            $devices[ $key ]['classIcon'] = "fas fa-mobile-alt";
        }

        return view('livewire.login-security-devices-component', compact('devices'));
    }

    public function logoutDevice($device)
    {
        DB::table('sessions')
            ->where('id', $device)
            ->where('user_id', auth()->id())
            ->delete();
    }
}
