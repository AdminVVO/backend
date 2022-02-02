<?php

namespace App\Http\Controllers;

use App\Models\ComentarioProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class internaController extends Controller
{
    //
    public function getContent($id){
        $publicacion = Product::find($id);
        $comentario=ComentarioProduct::all();
        return view('interna.interna', compact('publicacion','comentario'));
    }
}
