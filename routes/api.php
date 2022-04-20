<?php

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::get('returnlanguageRegions', [HomeController::class, 'languageRegions'])->name('returnlanguageRegions');
Route::post('changeLanguage', [HomeController::class, 'changeLanguageRegions'])->name('changeLanguage')->middleware('auth:sanctum');

Route::get('returncurrencys', [HomeController::class, 'Currency'])->name('returncurrencys');
Route::post('changeCurrency', [HomeController::class, 'changeCurrency'])->name('changeCurrency')->middleware('auth:sanctum');

