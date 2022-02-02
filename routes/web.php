<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginOrRegisterForEmailPhoneController;
use App\Http\Controllers\LoginOrRegisterForSocialsController;
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
})->name('/host');

Route::get('/interna', function () {
    return view('interna.Interna');
})->name('/interna');

Route::get('/blog', function () {
    return view('blog.Blog');
})->name('/blog');

## Routes Login and Register Google
Route::prefix('account')->middleware(['AccountDisable', 'auth'])->group( function(){
    ## We start the process of logging in through Google
    Route::get('', [AccountController::class, 'viewAccount'])->name('account');
    Route::get('personal_info', [AccountController::class, 'viewPersonalInfo'])->name('personal_info');
    Route::get('login_segurity', [AccountController::class, 'viewLoginSecury'])->name('login_segurity');
    Route::get('payment_payouts', [AccountController::class, 'viewPaymentsPayouts'])->name('payment_payouts');

    ## We received the response from Google
    // Route::any('callback', [LoginOrRegisterForSocialsController::class, 'callbackFromGoogle'])->name('callback');
});


// ## Routes Login and Register with phone number and email
// Route::prefix('logInRegistration')->name('logInRegistration')->group( function(){
//     ## We receive phone number
//     Route::post('initPhone', [LoginOrRegisterForEmailPhoneController::class, 'initPhoneLoginOrRegister'])->name('initPhone');

//     ## We receive email
//     Route::post('initEmail', [LoginOrRegisterForEmailPhoneController::class, 'initEmailLoginOrRegister'])->name('initEmail');

//     ## We verify phone number and email address
//     Route::post('verifyPhoneEmail', [LoginOrRegisterForEmailPhoneController::class, 'verificationLoginOrRegister'])->name('verifyPhoneEmail');

//     ## We register the user by phone number
//     Route::post('registrationPhoneEmail', [LoginOrRegisterForEmailPhoneController::class, 'createLoginOrRegister'])->name('registrationPhoneEmail');

//     ## We log the help message
//     Route::post('helpPhoneEmail', [LoginOrRegisterForEmailPhoneController::class, 'helpLoginOrRegister'])->name('helpPhoneEmail');




//     ## We resend the verification code phone
//     Route::post('resentVerifyPhone', [LoginOrRegisterForEmailPhoneController::class, 'resentCodePhoneLoginOrRegister'])->name('resentVerifyPhone');

//     ## We resend the verification code email
//     Route::post('resentVerifyEmail', [LoginOrRegisterForEmailPhoneController::class, 'resentCodeEmailLoginOrRegister'])->name('resentVerifyEmail');

//     ## List all countries with their phone code
//     Route::get('countryPhone', [LoginOrRegisterForEmailPhoneController::class, 'countryPhone'])->name('countryPhone');
// });

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
// Route::get('{any}', [HomeController::class, 'index'])->name('index');