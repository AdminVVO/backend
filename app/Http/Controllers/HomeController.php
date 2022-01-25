<?php

namespace App\Http\Controllers;

use App\Models\Currencs;
use App\Models\LanguagesRegions;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if (view()->exists($request->path())) {
            return view($request->path());
        }
        return abort(404);
    }

    public function languageRegions()
    {
        try {
            $language = LanguagesRegions::all();

            return response()->json([
                'status'  => 'success',
                'content' => $language
            ], 200);

        } catch (Exception $e) {
            return response()->json([
                'status'  => 'error',
                'error' => $e->getMessage()
            ], 404); 
        }
    }

    public function Currency()
    {
        try {
            $Currencs = Currencs::all();

            return response()->json([
                'status'  => 'success',
                'content' => $Currencs
            ], 200);

        } catch (Exception $e) {
            return response()->json([
                'status'  => 'error',
                'error' => $e->getMessage()
            ], 404); 
        }
    }

    public function changeLanguageRegions(Request $request)
    {
        try {
            User::where('id', Auth::id() )->update(['language_default' => $request['code'] ]);

            return response()->json([
                'status'  => 'success',
                'message' => 'Language changed successfully'
            ], 200);

        } catch (Exception $e) {
            return response()->json([
                'status'  => 'error',
                'error' => $e->getMessage()
            ], 404); 
        }
    }

    public function changeCurrency(Request $request)
    {
        try {
            User::where('id', Auth::id() )->update(['currency_default' => $request['code'] ]);

            return response()->json([
                'status'  => 'success',
                'message' => 'Currency changed successfully'
            ], 200);

        } catch (Exception $e) {
            return response()->json([
                'status'  => 'error',
                'error' => $e->getMessage()
            ], 404); 
        }
    }
}
