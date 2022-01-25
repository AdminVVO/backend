<?php

use App\Http\Controllers\AccommodationController;
use App\Http\Controllers\HomeController;
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

Route::get('returnCards', [AccommodationController::class, 'index'])->name('returnCards');

Route::get('returnlanguageRegions', [HomeController::class, 'languageRegions'])->name('returnlanguageRegions');
Route::post('changeLanguage', [HomeController::class, 'changeLanguageRegions'])->name('changeLanguage')->middleware('auth:sanctum');

Route::get('returncurrencys', [HomeController::class, 'Currency'])->name('returncurrencys');
Route::post('changeCurrency', [HomeController::class, 'changeCurrency'])->name('changeCurrency')->middleware('auth:sanctum');

