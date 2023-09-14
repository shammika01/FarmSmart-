<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MarketController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\FrontEndCommentController;
use App\Http\Controllers\FrontEndFarmController;
use App\Http\Controllers\FrontEndForumController;
use App\Http\Controllers\FrontEndMarketController;

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

Route::get('/', function () {
    return view('start');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('forum', [FrontEndForumController::class, 'index'])->name('forum');
    Route::post('forum', [FrontEndForumController::class, 'store'])->name('forum.store');
});

Route::middleware(['auth'])->group(function () {
    Route::get('forum', [FrontEndForumController::class, 'index'])->name('forum');
    Route::post('forum', [FrontEndForumController::class, 'store'])->name('forum.store');
    Route::post('comment/{post_id}', [FrontEndCommentController::class, 'store'])->name('comment.store');

    Route::get('farm', [FrontEndFarmController::class, 'index'])->name('farm');
    Route::get('market', [FrontEndMarketController::class, 'index'])->name('market');
    // Route::get('market/cart', [FrontEndMarketController::class, 'cart'])->name('market.cart');
    Route::post('market/cart', [FrontEndMarketController::class, 'cart'])->name('market.cart');
});





Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('index');
    Route::get('admin/users', [UserController::class, 'index'])->name('index');
    Route::resource('admin/users', UserController::class);

    Route::get('admin/market', [MarketController::class, 'index'])->name('index');
    Route::resource('admin/market', MarketController::class);
    Route::delete('admin/market/{marketItem}', [MarketController::class, 'destroy'])
        ->name('admin.market.destroy');
    Route::put('admin/market/{market}', [MarketController::class, 'update'])->name('admin.market.update');



    // Route::post('/market/add', [MarketController::class, 'store'])->name('admin.market.store');

    // Route::resource('/rides', RideController::class);
    // Route::resource('/drivers', DriverController::class);
    // Route::resource('/bookings', BookingController::class);
    // Route::resource('/users', UserController::class);
});
