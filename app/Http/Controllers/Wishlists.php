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

        return view('wishlists.index', ['content' => $categorias]);
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

        foreach ($content as $key => $value) {
            $categorias[ $value['name'] ]['avatar'][] = $value['avatar'];
            $categorias[ $value['name'] ]['listing'] = $value['listing_id'];
            $categorias[ $value['name'] ]['created_at'] = $value['created_at'];
        }
        // dump($categorias);
        // $contentListing = Listings::select(
        //     'listings.id_listings',
        //     'listings.title as title',
        //     'listings.photos',
        //     'listing_property_roomds.like_place',
        //     'listing_property_roomds.property_type',
        //     'listing_pricings.base_price as price',
        // )
        // ->leftJoin('listing_property_roomds', 'listings.id_listings', 'listing_property_roomds.listing_id')
        // ->leftJoin('listing_pricings', 'listings.id_listings', 'listing_pricings.listing_id')
        // ->where(function ($query) {
        //     if ( $this->filter_categ != null )
        //         return $query->where('listing_property_roomds.like_place', $this->filter_categ);
        // })->whereNotIn('status', ['in process'])
        // ->get();

        // dd($contentListing);
        return view('wishlists.wish', ['content' => $categorias]);
    }
}
