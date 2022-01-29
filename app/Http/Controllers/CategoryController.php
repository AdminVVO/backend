<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    //
    public function getCategory(){
        $category=Category::all();
        return view('category.CardCategory',compact('category'));
    }
    public function insertCategory(Request $request){
        $category= Category::create($request->all());
    }
    public function updateCategory(Request $request){
        $category= Category::find();
        $category->update($request->all());
    }
    public function deleteCategory(Request $request){
        $category= Category::find();
        $category->delete();
    }
}
