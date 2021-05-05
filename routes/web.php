<?php

use Illuminate\Support\Facades\Route;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CompleteController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\InviteCodeController;
use App\Http\Controllers\CouponsController;
use App\Http\Controllers\SettingsController;


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

// Search
Route::post('/search/{query}', [SearchController::class, 'show'])->name('shushop.search');

// Cart
Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.remove');

// Wishlist
Route::get('/dashboard/wishlist', [WishlistController::class, 'index'])->name('shushop.wishlist.index')->middleware('auth');
Route::post('/wishlist/{id}', [WishlistController::class, 'store'])->name('shushop.wishlist.store')->middleware('auth');
Route::delete('/dashboard/wishlist/{id}', [WishlistController::class, 'destroy'])->name('shushop.wishlist.destroy')->middleware('auth');

// Orders
Route::get('/dashboard/orders', [OrdersController::class, 'index'])->name('shushop.orders.index')->middleware('auth');
Route::post('/dashboard/orders/{id}', [OrdersController::class, 'store'])->name('shushop.orders.store')->middleware('auth');

// Invite
Route::get('/dashboard/invite', [InviteCodeController::class, 'index'])->name('shushop.invite.index')->middleware('auth');

// Coupons
Route::get('/dashboard/coupons', [CouponsController::class, 'index'])->name('shushop.coupons.index')->middleware('auth');

// Settings
Route::get('/dashboard/settings', [SettingsController::class, 'index'])->name('shushop.settings.index')->middleware('auth');
Route::put('/dashboard/settings/{id}', [SettingsController::class, 'update'])->name('shushop.settings.update')->middleware('auth');

// Checkout
Route::get('/checkout/basket', [BasketController::class, 'index'])->name('shushop.basket');
Route::resource('/checkout/billing', BillingController::class)->middleware('auth');
Route::get('/checkout/payment', [PaymentController::class, 'index'])->name('shushop.payment')->middleware('auth');
Route::post('/checkout/payment', [PaymentController::class, 'store'])->name('shushop.payment.store')->middleware('auth');
Route::get('/checkout/complete', [CompleteController::class, 'index'])->name('shushop.complete')->middleware('auth');

// General
Route::get('/', [LandingController::class, 'index'])->name('shushop.landing');
Route::get('/{category}/{id}', [ProductController::class, 'show'])->name('shushop.product');
Route::get('/{category}', [CategoryController::class, 'show'])->name('shushop.category');