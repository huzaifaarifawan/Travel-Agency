<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleSocialiteController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PackagesController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\BookingEmailRelation;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/packages', [PackagesController::class, 'index'])->name('packages');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
// --------- Booking Table ----------
Route::get('/bookingShow', [BookingController::class, 'show'])->name('booking_show');
Route::post('/booking_submit', [BookingController::class, 'store'])->name('booking_submit');
Route::post('/booking_edit', [BookingController::class, 'edit'])->name('booking_edit');
Route::post('/booking_update/{id}', [BookingController::class, 'update'])->name('booking_update');
Route::post('/booking_delete', [BookingController::class, 'destroy'])->name('booking_delete');
Route::post('/booking_customer', [BookingController::class, 'customer'])->name('booking_customer');
// ------------- Contact -------------
Route::get('/contactus_show', [ContactusController::class, 'show'])->name('contactus_show');
Route::post('/contactus_submit', [ContactusController::class, 'store'])->name('contactus_submit');
Route::get('/contactus_delete/{id}', [ContactusController::class, 'destroy'])->name('contactus_delete');
// Route::get('/data',[BookingEmailRelation::class,'index']);


// ---------- Google Login-----------
Route::get('auth/google', 'App\Http\Controllers\GoogleSocialiteController@redirectToGoogle');
Route::get('callback/google', 'App\Http\Controllers\GoogleSocialiteController@handleCallback');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () {
        return view('frontend.home');
    });
});
