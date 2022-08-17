<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HostController;
use App\Http\Controllers\InternaController;
use App\Http\Controllers\ListingsController;
use App\Http\Controllers\LoginOrRegisterForSocialsController;
use App\Http\Controllers\MessageChats;
use App\Http\Controllers\Personal;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TripsController;
use App\Http\Controllers\Wishlists;
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

Route::middleware(['AccountDisable'])->group( function(){
    
    Route::get('/example', function () {
        return view('example');
    })->name('/example');

    Route::get('/category', function () {
        return view('category.Category');
    })->name('/category');

    Route::get('/reviews/{id}',[ReviewsController::class,'index'])->name('reviews');

    Route::get('/interna/{id}',[internaController::class,'viewListingClientDetails'])->name('interna.getcontent');

    Route::get('/blog', function () {
        return view('blog.Blog');
    })->name('/blog');

    ## Routes Validation
    Route::get('validation/process/{id?}', [Personal::class, 'ValidationId'])->name('validation/process');

    ## Routes Home
    Route::get('/', [HomeController::class, 'viewHome'])->name('/');
    // Route::get('/login', function () { return back(); })->name('login');

    ## Routes Search
    Route::get('search', [SearchController::class, 'viewSearch'])->name('search');
    Route::get('search-flexible', [SearchController::class, 'viewSearchFlexible'])->name('search-flexible');

    ## Routes Host
    Route::get('signup-host', [HostController::class, 'viewSignHost'])->name('signup-host');

    ## Routes Profile
    Route::prefix('profile')->group( function(){
        ## Profile Index
            Route::get('{id}', [ProfileController::class, 'viewProfile'])->name('profile');
    });

    ## Routes Interna
    Route::prefix('interna')->group( function(){
        ## Interna Index
        Route::get('{id}', [InternaController::class, 'viewListingClientDetails'])->name('interna');
    });

    Route::middleware(['auth'])->group( function(){

        ## Nuevas Rutas Airbnb

            ## Routes Listing Sections
            Route::prefix('hosting')->group( function(){
                ## Listing Index
                    Route::get('listing', [ListingsController::class, 'viewListinAll'])->name('host-listing');
                ## Listing Become Host
                    Route::get('become-host', [ListingsController::class, 'viewListinBecome'])->name('become-host');
                ## Listing Show
                    Route::get('details/{id}', [ListingsController::class, 'viewListinShow'])->name('details-listing');
                ## Listing Custon Link
                    Route::get('cl/{id}', [ListingsController::class, 'viewCustomLink'])->name('custon-link');
            });

        ## Final Nuevas Rutas Airbnb



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
            ## Listing Show
                Route::get('show/{id}', [ListingsController::class, 'viewListinShow'])->name('listing-show');
            ## Listing Custon Link
                Route::get('cl/{id}', [ListingsController::class, 'viewCustomLink'])->name('custon-link');
            ## Listing Steps
                Route::post('uploadFilePhoto', [ListingsController::class, 'uploadFileDragzone'])->name('uploadFilePhoto');
                Route::delete('uploadFilePhoto', [ListingsController::class, 'deleteFileDragzone'])->name('deleteFilePhoto');
        });

        ## Routes Reservations Sections
        Route::prefix('reservations')->group( function(){
            ## Reservations Index
                Route::get('', [ReservationController::class, 'viewReservation'])->name('reservations');
                Route::get('ResortAll', [ReservationController::class, 'viewReservationForm'])->name('reservationsResort');
                Route::get('Update/{id}', [ReservationController::class, 'viewReservationFormUpdate'])->name('ReservUpdate');
                Route::get('SendResort/{id}', [ReservationController::class, 'viewReservationFormSendResort'])->name('ReservSendResort');
                Route::get('Preview/{id}', [ReservationController::class, 'viewReservationFormPreview'])->name('ReservPreview');
                Route::get('show/{id}', [ReservationController::class, 'viewReservationClient'])->name('ShowReservation');
                
                ## Create reservation for cliente send form chat
                    Route::get('send_form/{reservation}', [ReservationController::class, 'viewReservationCreateSendForm'])->name('ReservCreate');
                
                ## Change or Cancel Reservations
                Route::get('change-cancel/{id}', [ReservationController::class, 'viewChangeOrCancelReservations'])->name('reservationsChangeCancel');

                ## Change Reservations
                Route::get('change', [ReservationController::class, 'viewChangeReservations'])->name('reservationsChange');
        });

        ## Routes Trips
        Route::prefix('trips')->group( function(){
            ## Trips Index
                Route::get('', [TripsController::class, 'viewIndexTrips'])->name('trips');
        });

        ## Routes Wishlist
        Route::prefix('wishlist')->group( function(){
            ## Trips Index
                Route::get('', [Wishlists::class, 'viewWishlists'])->name('wishlist');
                Route::get('{name}', [Wishlists::class, 'viewWish'])->name('wish');
        });

        ## Routes Messages
        Route::prefix('message')->group( function(){
            ## Messages Index
                Route::get('', [MessageChats::class, 'viewMessageUser'])->name('messageUserIndex');
                Route::post('', [MessageChats::class, 'viewMessageUserPost'])->name('messageUserPostIndex');
        });

        ## Routes Calendar
        Route::prefix('calendar')->group( function(){
            ## Calendar Index
                Route::get('', [CalendarController::class, 'viewCalendar'])->name('calendarIndex');
                Route::get('individual', [CalendarController::class, 'viewPersonCalendar'])->name('calendarPersonIndex');
        });



    });
});

## Route Not Login 
    ## Route Confirme Resort Reservation and Preview Reservation Resort 
        Route::get('ConfirmResort/{id}', [ReservationController::class, 'viewReservationFormConfirmnResort'])->name('ConfirmResort');


Route::middleware(['auth'])->group( function(){
    ## Routes Account Disabled
    Route::prefix('account')->group( function(){
        ## Account Disabled
            Route::get('blocked', [AccountController::class, 'viewBlockAccount'])->middleware(['AccountNotDisable'])->name('blocked');
    });

    ## Routes Logiut
    Route::get('logout', [HomeController::class, 'logout'])->name('logout');
});

## Routes Login and Register Google
Route::prefix('google')->name('google.')->group( function(){
    ## We start the process of logging in through Google
    Route::get('login', [LoginOrRegisterForSocialsController::class, 'loginWithGoogle'])->middleware(['api'])->name('login');
    ## We received the response from Google
    Route::any('callback', [LoginOrRegisterForSocialsController::class, 'callbackFromGoogle'])->middleware(['api'])->name('callback');
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