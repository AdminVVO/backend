<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
    public function viewProfile($id)
    {
        // $content = User::select(
        //     'wishlists.email',
        //     'listings.photos',
        // )->where([
        //     'wishlists.user_id' => Auth::id()
        // ])
        // ->leftJoin('user', 'wishlists.listing_id', 'user.id_user')
        // ->get();

        // return view('wishlists.index', ['content' => $content]);
        return view('profile.index', ['idUser' => $id]);
    }
}
