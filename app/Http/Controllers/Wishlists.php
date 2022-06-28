<?php

namespace App\Http\Controllers;

use App\Models\Listing\Listings;
use App\Models\Wishlists as modelWishlists;
use Illuminate\Http\Request;
use Auth;

class Wishlists extends Controller
{
    public function viewWishlists()
    {
        $content = modelWishlists::select(
            'name',
            'avatar',
            'listing_id',
            'created_at',
        )->where([
            'user_id' => Auth::id()
        ])
        ->get()->toArray();

        foreach ($content as $key => $value) {
            $categorias[ $value['name'] ]['avatar'][] = $value['avatar'];
            $categorias[ $value['name'] ]['listing'] = $value['listing_id'];
            $categorias[ $value['name'] ]['created_at'] = $value['created_at'];
        }

        return view('wishlists.index', ['content' => $categorias ?? []]);
    }

    public function viewWish($name)
    {
        $content = modelWishlists::select(
            'name',
            'avatar',
            'listing_id',
            'created_at',
        )->where([
            'user_id' => Auth::id(),
            'name' => $name
        ])
        ->get()->toArray();
            
        // if (!count($content)) {
        //     return view('wishlists.wish', ['content' => null, 'name' => $name]);
        // }

        foreach ($content as $key => $value) {
            $categorias[ $value['name'] ]['avatar'][] = $value['avatar'];
            $categorias[ $value['name'] ]['listing'] = $value['listing_id'];
            $categorias[ $value['name'] ]['created_at'] = $value['created_at'];
        }

        return view('wishlists.wish', ['content' => $categorias ?? [], 'name' => $name]);
    }
}
