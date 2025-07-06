<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [\App\Http\Controllers\BookingController::class,'index'])->name('booking.index');
Route::get('/detail-booking/{id}', [\App\Http\Controllers\BookingController::class,'detailBooking'])->name('booking.detail');
Route::get('booking/create/{id}', [\App\Http\Controllers\BookingController::class,'booking'])->name('booking');
Route::post('booking', [\App\Http\Controllers\OrderController::class,'order'])->name('booking.store');
Route::get('booking/success/{date}', [\App\Http\Controllers\BookingController::class,'success'])->name('booking.success');

Route::group(['middleware' => ['isAdmin','auth'],'prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('orders', [\App\Http\Controllers\OrderController::class,'index']);

    Route::resource('permissions', \App\Http\Controllers\Admin\PermissionController::class);
    Route::delete('permissions_mass_destroy', [\App\Http\Controllers\Admin\PermissionController::class, 'massDestroy'])->name('permissions.mass_destroy');
    Route::resource('roles', \App\Http\Controllers\Admin\RoleController::class);
    Route::delete('roles_mass_destroy', [\App\Http\Controllers\Admin\RoleController::class, 'massDestroy'])->name('roles.mass_destroy');
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    Route::delete('users_mass_destroy', [\App\Http\Controllers\Admin\UserController::class, 'massDestroy'])->name('users.mass_destroy');

    Route::resource('arenas', \App\Http\Controllers\Admin\ArenaController::class);
    Route::post('arenas/media', [\App\Http\Controllers\Admin\ArenaController::class,'storeMedia'])->name('arenas.storeMedia');
    Route::delete('arenas_mass_destroy', [\App\Http\Controllers\Admin\ArenaController::class, 'massDestroy'])->name('arenas.mass_destroy');

    Route::resource('bookings', \App\Http\Controllers\Admin\BookingController::class);
    Route::delete('bookings_mass_destroy', [\App\Http\Controllers\Admin\BookingController::class, 'massDestroy'])->name('bookings.mass_destroy');

    Route::resource('tempats', \App\Http\Controllers\Admin\TempatController::class);
    Route::get('tempat', [\App\Http\Controllers\Admin\TempatController::class,'index']);
    Route::post('create_tempat', [\App\Http\Controllers\Admin\TempatController::class,'create']);
    Route::post('tempats/media', [\App\Http\Controllers\Admin\TempatController::class,'storeMedia'])->name('tempat.storeMedia');
    Route::delete('tempats_mass_destroy', [\App\Http\Controllers\Admin\TempatController::class, 'massDestroy'])->name('tempats.mass_destroy');
    Route::post('post-tempat', [\App\Http\Controllers\Admin\TempatController::class,'store']);
    Route::post('edit-tempat/{id}', [\App\Http\Controllers\Admin\TempatController::class,'update']);
    //wkwkwk error kbeh
    //rapapa wkwkw
    //angel kan:)
    // Route::get('/api/map-marker', 'Api\ApiGooglemap@mapMarker');

//route booking hapus bae jal
// lagi neng njero kantor pak batre ntek ra bsa ngmng/ngrungokna

});

Auth::routes();

