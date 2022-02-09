<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListingsController;
use App\Http\Controllers\LoginOrRegisterForEmailPhoneController;
use App\Http\Controllers\LoginOrRegisterForSocialsController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\internaController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.Home');
})->name('/');

Route::get('/category', function () {
    return view('category.Category');
})->name('/category');

Route::get('/host', function () {
    return view('host.Host');
})->name('host');

Route::get('/interna', function () {
    return view('interna.Interna');
})->name('/interna');

Route::get('/search', function () {
    return view('search.search');
})->name('/search');
Route::get('/searchflexible', function () {
    return view('searchflexible.searchflexible');
})->name('/search');

Route::get('/interna/{id}',[internaController::class,'getcontent'])->name('interna.getcontent');

Route::get('/blog', function () {
    return view('blog.Blog');
})->name('/blog');


Route::middleware(['AccountDisable', 'auth'])->group( function(){

    ## Routes Account Sections
    Route::prefix('account')->group( function(){
        ## Account Index
            Route::get('', [AccountController::class, 'viewAccount'])->name('account');
        ## Account Personal Info
            Route::get('personal_info', [AccountController::class, 'viewPersonalInfo'])->name('personal_info');
        ## Account Login Secury
            Route::get('login_segurity', [AccountController::class, 'viewLoginSecury'])->name('login_segurity');
        ## Account Payments
            Route::get('payment_payouts', [AccountController::class, 'viewPaymentsPayouts'])->name('payment_payouts');
        ## Account GovermenID
            Route::get('govermID', [AccountController::class, 'viewAddPhotoGovermID'])->name('govermID');
        ## Account Preferences
            Route::get('global_preferen', [AccountController::class, 'viewGlobalPreferences'])->name('global_preferen');
    });

    ## Routes Listing Sections
    Route::prefix('listing')->group( function(){
        ## Listing Index
            Route::get('', [ListingsController::class, 'viewListinAll'])->name('listing');
        ## Listing Steps
            Route::get('stepInit', [ListingsController::class, 'viewListinSteps'])->name('stepInit');
    });

    ## Routes Reservations Sections
    Route::prefix('reservations')->group( function(){
        ## Reservations Index
            Route::get('', [ReservationController::class, 'viewReservation'])->name('reservations');
    });

});

## Routes Login and Register Google
Route::prefix('google')->name('google.')->group( function(){
    ## We start the process of logging in through Google
    Route::get('login', [LoginOrRegisterForSocialsController::class, 'loginWithGoogle'])->name('login');
    ## We received the response from Google
    Route::any('callback', [LoginOrRegisterForSocialsController::class, 'callbackFromGoogle'])->name('callback');
});

## Routes Login and Register Facebook
Route::prefix('facebook')->name('facebook.')->group( function(){
    ## We start the process of logging in through Facebook
    Route::get('login', [LoginOrRegisterForSocialsController::class, 'loginWithFacebook'])->name('login');
    ## We received the response from Facebook
    Route::any('callback', [LoginOrRegisterForSocialsController::class, 'callbackFromFacebook'])->name('callback');
});

// ## If a route does not exist, return error 404 !! Always go last this route !!
Route::get('{any}', [HomeController::class, 'index'])->name('index');