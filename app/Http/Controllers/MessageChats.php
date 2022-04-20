<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageChats extends Controller
{
    public function viewMessageUser()
    {     
        return view('chats.chat-user');
    }

    public function viewMessageUserPost(Request $request)
    {     
        return view('chats.chat-user', ['request' => $request->id ]);
    }
}
