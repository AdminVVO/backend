<?php

namespace App\Http\Controllers;

use App\Models\Wishlists as modelWishlists;
use Auth;

class Wishlists extends Controller
{
    public function viewWishlists()
    {
        return $this->redirectView(null);
    }

    public function viewWish($name)
    {

        return $this->redirectView($name);
    }

    public function redirectView($name)
    {
        $content = modelWishlists::select(
            'name',
            'avatar',
            'listing_id',
            'created_at',
        )->where(['user_id' => Auth::id()])->get();

        if($name) {
            $content->where(['name' => $name]);
        }

        $content = $content->toArray();

        foreach ($content as $key => $value) {
            $categorias[$value['name']]['avatar'][] = $value['avatar'];
            $categorias[$value['name']]['listing'] = $value['listing_id'];
            $categorias[$value['name']]['created_at'] = $value['created_at'];
        }

        if ($name) {
            return view('wishlists.wish', ['content' => $categorias ?? [], 'name' => $name]);
        }

        return view('wishlists.index', ['content' => $categorias ?? []]);
    }
}
