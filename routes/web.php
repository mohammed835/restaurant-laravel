<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::get('/',[HomeController::class,'index']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// thats is all route belong HomeController  deleteFood ShowChefs deleteCart

route::get('redirects',[HomeController::class,'redirects']);

route::Post('addCart/{id}',[HomeController::class,'addCart'])->name('addCart');

route::get('showCart',[HomeController::class,'showCart'])->name('showCart');

route::get('deleteCart/{id}',[HomeController::class,'deleteCart'])->name('deleteCart');

route::post('orderConfirm',[HomeController::class,'orderConfirm'])->name('orderConfirm');

// thats is all route belong Admin controller  storeUser updateFood UploadUpdateFood
route::get('users',[AdminController::class,'index'])->name('users');

route::get('deleteUser/{id}',[AdminController::class,'deleteUser'])->name('deleteUser');
route::get('updateUser/{id}',[AdminController::class,'updateUser'])->name('updateUser');

route::post('storeUser/{id}',[AdminController::class,'storeUser'])->name('storeUser');

route::get('foodMenu',[AdminController::class,'foodMenu'])->name('foodMenu');

route::get('addFood',[AdminController::class,'addFood'])->name('addFood');

route::post('uploadFood',[AdminController::class,'uploadFood'])->name('uploadFood');

route::get('deleteFood/{id}',[AdminController::class,'deleteFood'])->name('deleteFood');

route::get('updateFood/{id}',[AdminController::class,'updateFood'])->name('updateFood');

route::post('UploadUpdateFood/{id}',[AdminController::class,'UploadUpdateFood'])->name('UploadUpdateFood');

route::get('viewReservation',[AdminController::class,'viewReservation'])->name('viewReservation');

route::Post('Reservation',[AdminController::class,'Reservation'])->name('Reservation');

route::get('deleteReservation/{id}',[AdminController::class,'deleteReservation'])->name('deleteReservation');

route::post('Addchef',[AdminController::class,'Addchef'])->name('Addchef');

route::get('showChef',[AdminController::class,'showChef'])->name('showChef');

route::get('deleteChef/{id}',[AdminController::class,'deleteChef'])->name('deleteChef');


// route::get('viewChef',[AdminController::class,'viewChef'])->name('viewChef'); deleteChef deleteReservation
