<?php

use Illuminate\Support\Facades\Route;
use Webkul\Shop\Http\Controllers\CartController;
use Webkul\Shop\Http\Controllers\OnepageController;
use Webkul\Shop\Http\Controllers\StripeController;


Route::controller(StripeController::class)->prefix('stripe')->group(function () {
    Route::get('', 'checkout')->name('stripe.checkout');
});
Route::group(['middleware' => ['locale', 'theme', 'currency']], function () {
    /**
     * Cart routes.
     */
//    Route::get('/admin/check', [StripeController::class,'checkout']);

    Route::controller(CartController::class)->prefix('checkout/cart')->group(function () {
        Route::get('', 'index')->name('shop.checkout.cart.index');
    });

    Route::controller(OnepageController::class)->prefix('checkout/onepage')->group(function () {
        Route::get('', 'index')->name('shop.checkout.onepage.index');

        Route::get('success', 'success')->name('shop.checkout.onepage.success');
    });
});
