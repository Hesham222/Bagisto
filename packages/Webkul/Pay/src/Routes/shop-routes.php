<?php

use Illuminate\Support\Facades\Route;
use Webkul\Pay\Http\Controllers\Shop\PayController;

Route::group(['middleware' => ['web', 'theme', 'locale', 'currency'], 'prefix' => 'pay'], function () {
    Route::get('', [PayController::class, 'index'])->name('shop.pay.index');
});