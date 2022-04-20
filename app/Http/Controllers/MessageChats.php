<?php

namespace App\Http\Controllers;

use App\Models\Listing\Listings;
use Illuminate\Http\Request;

class MessageChats extends Controller
{
    public function viewMessageUser()
    {     
        return view('chats.chat-user');
    }

    public function viewMessageUserPost(Request $request)
    {     

        $Listings = Listings::select('id_listings')->get();

        // dd($Listings[0]->id_listings);


        return view('chats.chat-user', ['request' => $Listings[0]->id_listings ]);
    }
}
