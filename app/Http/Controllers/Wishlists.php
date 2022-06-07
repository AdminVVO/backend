<?php

namespace App\Http\Controllers;

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

        return view('wishlists.index', ['content' => $categorias]);
    }
}
