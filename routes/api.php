<?php

use App\Http\Controllers\LoginOrRegisterForEmailPhoneController;
use App\Http\Controllers\LoginOrRegisterForSocialsController;
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

## Routes Login and Register with phone number and email
Route::prefix('logInRegistration')->name('logInRegistration')->group( function(){
    ## We receive phone number
    Route::post('initPhone', [LoginOrRegisterForEmailPhoneController::class, 'initPhoneLoginOrRegister'])->name('initPhone');

    ## We receive email
    Route::post('initEmail', [LoginOrRegisterForEmailPhoneController::class, 'initEmailLoginOrRegister'])->name('initEmail');

    ## We verify phone number and email address
    Route::post('verifyPhoneEmail', [LoginOrRegisterForEmailPhoneController::class, 'verificationLoginOrRegister'])->name('verifyPhoneEmail');

    ## We register the user by phone number
    Route::post('registrationPhoneEmail', [LoginOrRegisterForEmailPhoneController::class, 'createLoginOrRegister'])->name('registrationPhoneEmail');

    ## We log the help message
    Route::post('helpPhoneEmail', [LoginOrRegisterForEmailPhoneController::class, 'helpLoginOrRegister'])->name('helpPhoneEmail');

    ## We resend the verification code phone and email
    Route::post('resentVerify', [LoginOrRegisterForEmailPhoneController::class, 'resentCodeLoginOrRegister'])->name('resentVerify');

    Route::post('logout', [LoginOrRegisterForEmailPhoneController::class, 'logoutLoginOrRegister'])->name('logout')->middleware('auth:sanctum');



});

// ## Routes Login and Register Google
// Route::prefix('google')->name('google.')->group( function(){
//     ## We start the process of logging in through Google
//     Route::get('login', [LoginOrRegisterForSocialsController::class, 'loginWithGoogle'])->name('login');

//     ## We received the response from Google
//     Route::any('callback', [LoginOrRegisterForSocialsController::class, 'callbackFromGoogle'])->name('callback');
// });

// ## Routes Login and Register Facebook
// Route::prefix('facebook')->name('facebook.')->group( function(){
//     ## We start the process of logging in through Facebook
//     Route::get('login', [LoginOrRegisterForSocialsController::class, 'loginWithFacebook'])->name('login');

//     ## We received the response from Facebook
//     Route::any('callback', [LoginOrRegisterForSocialsController::class, 'callbackFromFacebook'])->name('callback');
// });