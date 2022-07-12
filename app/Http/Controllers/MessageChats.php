<?php

namespace App\Http\Controllers;

use App\Models\Listing\Listings;
use Illuminate\Http\Request;

class MessageChats extends Controller
{

    public function viewMessageUser()
    {     
        if ( request()->get('interna') )
            return view('chats.chat-message', ['listing' => request()->get('interna') ]);

        return view('chats.chat-message');
    }

    public function viewMessageUserPost(Request $request)
    {    
        $Listings = Listings::pluck('id_listings');
        
        if ( count( $Listings ) != 0 ) {
            if ( $request->id === "2" ) {
                return view('chats.chat-message', ['listing' => $Listings[1] ]);

            } else {
                return view('chats.chat-message', ['listing' => $Listings[0] ]);

            }
        }

        return view('chats.chat-message');
    }
}
