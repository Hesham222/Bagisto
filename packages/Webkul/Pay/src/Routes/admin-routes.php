<?php

use Illuminate\Support\Facades\Route;
use Webkul\Pay\Http\Controllers\Admin\PayController;

Route::group(['middleware' => ['web', 'admin'], 'prefix' => 'admin/pay'], function () {
    Route::controller(PayController::class)->group(function () {
        Route::get('', 'checkout')->name('admin.pay.checkout');
    });


});
