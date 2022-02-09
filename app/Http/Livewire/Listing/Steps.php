<?php

namespace App\Http\Livewire\Listing;

use App\Models\Listings;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Steps extends Component
{
    use LivewireAlert;
    
    public $exitSave = false;
    public $imgShow = '';
    public $step = 'finish';
    public $content = [
        'host' => '',
        'description' => '',
    ];
    public $listinEdit = '';

    public  $listeners = [
        'returnBack',
        'next',
        'initCreate',
        'continueCreate',
        'letGo',
    ];

    public function mount()
    {
        $this->imgShow = $this->ShowImg('finish');
    }

    public function render()
    {
        return view('livewire.listing.steps');
    }
    
    public function initCreate()
    {
        $this->step = 'init';
    }

    public function letGo()
    {
        $this->imgShow = $this->ShowImg('host');
        $this->exitSave = true;
        $this->step = 'host';
    }

    public function ShowImg($payload)
    {
        switch ( $payload ) {
            case 'host':
                return 'step.jpg';
                break;

            case 'apartment':
                return 's1.jpg';
                break;

            case 'house':
                return 's2.jpg';
                break;

            case 'secondary':
                return 's3.jpg';
                break;

            case 'unique':
                return 's4.jpg';
                break;

            case 'breakfast':
                return 's5.jpg';
                break;

            case 'boutique':
                return 's6.jpg';
                break;

            case 'maps':
                return 's1.jpg';
                break;

            default:
                return 'listing.jpg';
                break;
        }
    }

    public function returnBack($payload)
    {
        if ( $payload === 'notDefine'){
            $payload = $this->content['host'];
        }

        $this->step = $payload;
        $this->imgShow = $this->ShowImg( $payload == 'init' ? '' : $payload );
        $this->exitSave = $payload == 'init' || $payload == 'finish' ? false : true;
    }
    
    public function next($payload)
    {
        if ( $payload['from'] === 'host' ){
            $this->step = $payload['to'];
            $this->sendHost( $payload['content'] );
            $this->imgShow = $this->ShowImg( $payload['img'] );
        }

        if ( $payload['from'] === 'description' ){
            $this->step = $payload['to'];
            $this->sendDescription( $payload['content'] );
        }

        if ( $payload['from'] === 'space' ){
            $this->step = $payload['to'];
            $this->sendDescription( $payload['content'] );
            $this->imgShow = $this->ShowImg( $payload['img'] );
        }





    }

    public function sendHost($payload)
    {
        $this->content['host'] = $payload;
    }

    public function sendDescription($payload)
    {
        $this->content['description'] = $payload;
    }

    public function saveToExit()
    {
        if ( $this->content['host'] == '')
            return redirect()->route('listing');

        if ( $this->listinEdit == '' )
            Listings::create([
                'user_id'     => Auth::id(),
                'host'        => $this->content['host'],
                'description' => $this->content['description'],
                'img'         => $this->ShowImg( $this->content['host'] ),
                'step'        => $this->step,
            ]);

        if ( $this->listinEdit != '' )
            Listings::where([
                'user_id' => Auth::id(),
                'id_listings' => $this->listinEdit,
            ])->update([
                'host'        => $this->content['host'],
                'description' => $this->content['description'],
                'img'         => $this->ShowImg( $this->content['host'] ),
                'step'        => $this->step,
            ]);


        $this->flash('success', 'listing has been saved successfully', [], route('listing'));
    }

    public function continueCreate($payload)
    {
        $Listings = Listings::where([
            'id_listings' => $payload,
            'status'      => 'in process',
            'user_id'     => Auth::id()
        ])->first();

        $this->content['host'] = $Listings['host'];
        $this->content['description'] = $Listings['description'];
        $this->step = $Listings['step'];
        $this->imgShow = $this->ShowImg( $Listings['step'] );
        $this->listinEdit = $Listings['id_listings'];
        $this->exitSave = $Listings['step'] == 'init' || $Listings['step'] == 'finish' ? false : true;

    }
}