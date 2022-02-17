<?php

namespace App\Http\Livewire\Listing;

use App\Models\Listings;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use File;
use Storage;

class Steps extends Component
{
    use LivewireAlert;
    
    public $exitSave = false;
    public $imgShow = 'listing.jpg';
    public $step = 'finish';
    public $content = [
        'host' => '',
        'description' => '',
        'space' => '',
        'location' => [],
        'guests' => [],
        'offers' => [],
        'photos' => [],
        'oldPhotos' => [],
        'placeTitle' => '',
        'placeOptions' => [],
        'placeComment' => '',
        'prices' => 0,
        'featurs' => [],
    ];
    public $listinEdit = '';

    public $listeners = [
        'returnBack',
        'next',
        'continueCreate',
        'enterManuallyMaps',
        'enterLocation',
    ];

    public function render()
    {
        $this->emit('emitLocation', $this->content['location']);
        return view('livewire.listing.steps');
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
                return 'step4.jpg';
                break;

            case 'mapsmanually':
                return 'step4.jpg';
                break;

            case 'guests':
                return 'step5.jpg';
                break;

            case 'offersplaces':
                return 'step6.jpg';
                break;

            case 'photos':
                return 'step7.jpg';
                break;

            case 'describeToPlacesTitle':
                return 'step8.jpg';
                break;

            case 'describeToPlacesOptions':
                return 's9.jpg';
                break;

            case 'describeToPlacesComment':
                return 's9.jpg';
                break;

            case 'prices':
                return 'step10.jpg';
                break;

            case 'featurs':
                return 'step11.jpg';
                break;

            case 'checklisting':
                return 'stepq11.jpg';
                break;

            case 'congratulations':
                return 's12.jpg';
                break;

            default:
                return 'listing.jpg';
                break;
        }
    }

    public function returnBack($payload)
    {
        if ( $payload === 'notDefine')
            $payload = $this->content['host'];

        if ( $payload === 'photos') {
            $folderAuth = Auth::user()->name . '-' . Auth::id();

            if ( File::isDirectory( storage_path('app/public/tempFilepond/' . $folderAuth) ) )
                File::deleteDirectory( storage_path('app/public/tempFilepond/' . $folderAuth) );
        }

        $this->step = $payload;
        $this->imgShow = $this->ShowImg( $payload == 'init' ? '' : $payload );
        $this->exitSave = $payload == 'init' || $payload == 'finish' || $payload == 'congratulations' || $payload == 'host' ? false : true;
    }
    
    public function next($payload)
    {
        if ( $payload['from'] === 'finish' )
            $this->step = $payload['to'];

        if ( $payload['from'] === 'letGo' ){
            $this->step = $payload['to'];
            $this->imgShow = $this->ShowImg( $payload['img'] );
        }

        if ( $payload['from'] === 'host' ){
            $this->step = $payload['to'];
            $this->saveData( $payload['content'], 'host' );
            $this->imgShow = $this->ShowImg( $payload['img'] );
        }
        if ( $payload['from'] === 'description' ){
            $this->step = $payload['to'];
            $this->saveData( $payload['content'], 'description' );
        }

        if ( $payload['from'] === 'space' ){
            $this->step = $payload['to'];
            $this->saveData( $payload['content'], 'space' );
            $this->imgShow = $this->ShowImg( $payload['img'] );
        }

        if ( $payload['from'] === 'maps' ){
            $this->step = $payload['to'];
            $this->saveData( $payload['content'], 'location' );
            $this->imgShow = $this->ShowImg( $payload['img'] );
        }

        if ( $payload['from'] === 'guest' ){
            $this->step = $payload['to'];
            $this->saveData( $payload['content'], 'guests' );
            $this->imgShow = $this->ShowImg( $payload['img'] );
        }

        if ( $payload['from'] === 'offersplaces' ){
            $this->step = $payload['to'];
            $this->saveData( $payload['content'], 'offers' );
            $this->imgShow = $this->ShowImg( $payload['img'] );

            $folderAuth = Auth::user()->name . '-' . Auth::id();

            if ( File::isDirectory( storage_path('app/public/tempFilepond/' . $folderAuth) ) )
                File::deleteDirectory( storage_path('app/public/tempFilepond/' . $folderAuth) );
        }

        if ( $payload['from'] === 'photos' ){
            $this->step = $payload['to'];
            $this->imgShow = $this->ShowImg( $payload['img'] );
        }

        if ( $payload['from'] === 'photosAll' ){
            $this->step = $payload['to'];
            $this->saveData( $payload['content'], 'photos' );
            $this->imgShow = $this->ShowImg( $payload['img'] );
        }

        if ( $payload['from'] === 'describeToPlacesTitle' ){
            $this->step = $payload['to'];
            $this->saveData( $payload['content'], 'placeTitle' );
            $this->imgShow = $this->ShowImg( $payload['img'] );
        }

        if ( $payload['from'] === 'describeToPlacesOptions' ){
            $this->step = $payload['to'];
            $this->saveData( $payload['content'], 'placeOptions' );
            $this->imgShow = $this->ShowImg( $payload['img'] );
        }

        if ( $payload['from'] === 'describeToPlacesComment' ){
            $this->step = $payload['to'];
            $this->saveData( $payload['content'], 'placeComment' );
            $this->imgShow = $this->ShowImg( $payload['img'] );
        }

        if ( $payload['from'] === 'prices' ){
            $this->step = $payload['to'];
            $this->saveData( $payload['content'], 'prices' );
            $this->imgShow = $this->ShowImg( $payload['img'] );
        }

        if ( $payload['from'] === 'featurs' ){
            $this->step = $payload['to'];
            $this->saveData( $payload['content'], 'featurs' );
            $this->imgShow = $this->ShowImg( $payload['img'] );
        }

        if ( $payload['from'] === 'checklisting' ){
            $this->step = $payload['to'];
            $this->sendChecklisting();
            $this->imgShow = $this->ShowImg( $payload['img'] );
            $this->exitSave = $payload['to'] == 'congratulations' ? false : true;
        }

        $this->exitSave = $this->step == 'letGo' || $this->step == 'finish' || $this->step == 'congratulations' || $this->step == 'host' ? false : true;
    }

    public function saveData($payload, $index)
    {
        $this->content[ $index ] = $payload;
    }

    public function enterManuallyMaps($payload)
    {
        $this->step = $payload;
    }

    public function sendChecklisting()
    {
        if ( $this->listinEdit == '' )
            Listings::create([
                'user_id'      => Auth::id(),
                'step'         => $this->step,
                'host'         => $this->content['host'],
                'description'  => $this->content['description'],
                'space'        => $this->content['space'],
                'location'      => json_encode($this->content['location']),
                'guests'       => json_encode( $this->content['guests'] ),
                'offers'       => json_encode( $this->content['offers'] ),
                'photos'       => json_encode( $this->content['photos'] ),
                'placeTitle'   => $this->content['placeTitle'],
                'placeOptions' => json_encode( $this->content['placeOptions'] ),
                'placeComment' => $this->content['placeComment'],
                'prices'       => $this->content['prices'],
                'featurs'      => json_encode( $this->content['featurs'] ),
                'img'          => $this->ShowImg( $this->content['host'] ),
                'status'       => 'Completed',
            ]);

        if ( $this->listinEdit != '' )
            Listings::where([
                'user_id' => Auth::id(),
                'id_listings' => $this->listinEdit,
            ])->update([
                'step'         => $this->step,
                'host'         => $this->content['host'],
                'description'  => $this->content['description'],
                'space'        => $this->content['space'],
                'location'      => json_encode($this->content['location']),
                'guests'       => json_encode( $this->content['guests'] ),
                'offers'       => json_encode( $this->content['offers'] ),
                'photos'       => json_encode( $this->content['photos'] ),
                'placeTitle'   => $this->content['placeTitle'],
                'placeOptions' => json_encode( $this->content['placeOptions'] ),
                'placeComment' => $this->content['placeComment'],
                'prices'       => $this->content['prices'],
                'featurs'      => json_encode( $this->content['featurs'] ),
                'img'          => $this->ShowImg( $this->content['host'] ),
                'status'       => 'Completed',
            ]);
            
        $this->alert('success', 'Your listing will be published soon.');
    }

    public function saveToExit()
    {
        $folderAuth = Auth::user()->name . '-' . Auth::id();
        
        if ( $this->content['host'] == '')
            return redirect()->route('listing');

        if ( $this->listinEdit == '' ){
            Listings::create([
                'user_id'      => Auth::id(),
                'step'         => $this->step,
                'host'         => $this->content['host'],
                'description'  => $this->content['description'],
                'space'        => $this->content['space'],
                'location'      => json_encode($this->content['location']),
                'guests'       => json_encode( $this->content['guests'] ),
                'offers'       => json_encode( $this->content['offers'] ),
                'photos'       => json_encode( $this->content['photos'] ),
                'placeTitle'   => $this->content['placeTitle'],
                'placeOptions' => json_encode( $this->content['placeOptions'] ),
                'placeComment' => $this->content['placeComment'],
                'prices'       => $this->content['prices'],
                'featurs'      => json_encode( $this->content['featurs'] ),
                'img'          => $this->ShowImg( $this->content['host'] ),
            ]);
        }

        if ( $this->listinEdit != '' ){
            Listings::where([
                'user_id' => Auth::id(),
                'id_listings' => $this->listinEdit,
            ])->update([
                'step'         => $this->step,
                'host'         => $this->content['host'],
                'description'  => $this->content['description'],
                'space'        => $this->content['space'],
                'location'      => json_encode($this->content['location']),
                'guests'       => json_encode( $this->content['guests'] ),
                'offers'       => json_encode( $this->content['offers'] ),
                'photos'       => json_encode( $this->content['photos'] ),
                'placeTitle'   => $this->content['placeTitle'],
                'placeOptions' => json_encode( $this->content['placeOptions'] ),
                'placeComment' => $this->content['placeComment'],
                'prices'       => $this->content['prices'],
                'featurs'      => json_encode( $this->content['featurs'] ),
                'img'          => $this->ShowImg( $this->content['host'] ),
            ]);
        }

        if ( File::isDirectory( storage_path('app/public/tempFilepond/' . $folderAuth) ) ){
            foreach ($this->content['photos'] as $key => $value) {
                $explodeName = explode('-', $value);
                    $fileIn = 'public/tempFilepond/' . $folderAuth . '/' . $explodeName[1];
                $fileOut = 'public/uploadListing/' . $value;

                Storage::copy($fileIn, $fileOut);
            }

            File::deleteDirectory( storage_path('app/public/tempFilepond/' . $folderAuth) );

            if ( !empty( $this->content['oldPhotos'] ) ) {
                foreach ($this->content['oldPhotos'] as $key => $value) {
                    Storage::disk('uploadListing')->delete( $value );
                }
            }
        }

        $this->flash('success', 'listing has been saved successfully', [], route('listing'));
    }

    public function continueCreate($payload)
    {
        $Listings = Listings::where([
            'id_listings' => $payload,
            'status'      => 'in process',
            'user_id'     => Auth::id()
        ])->first();

        $this->listinEdit = $Listings['id_listings'];
        $this->step = $Listings['step'];
        $this->content['host'] = $Listings['host'];
        $this->content['description'] = $Listings['description'];
        $this->content['space'] = $Listings['space'];
        $this->content['location'] = json_decode( $Listings['location'] );
        $this->content['guests'] = json_decode( $Listings['guests'] );
        $this->content['offers'] = json_decode( $Listings['offers'] );
        $this->content['photos'] = json_decode( $Listings['photos'] );
        $this->content['oldPhotos'] = json_decode( $Listings['photos'] );
            if ( empty( $this->content['photos'] ) ) {
                $folderAuth = Auth::user()->name . '-' . Auth::id();

                if ( File::isDirectory( storage_path('app/public/tempFilepond/' . $folderAuth) ) )
                    File::deleteDirectory( storage_path('app/public/tempFilepond/' . $folderAuth) );
            };

        $this->content['placeTitle'] = $Listings['placeTitle'];
        $this->content['placeOptions'] = json_decode( $Listings['placeOptions'] );
        $this->content['placeComment'] = $Listings['placeComment'];
        $this->content['prices'] = $Listings['prices'];
        $this->content['featurs'] = json_decode( $Listings['featurs'] );
        $this->imgShow = $this->ShowImg( $Listings['step'] );
        $this->exitSave = $Listings['step'] == 'init' || $Listings['step'] == 'finish' ? false : true;

    }
}