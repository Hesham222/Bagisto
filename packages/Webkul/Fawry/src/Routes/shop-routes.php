<?php

use Illuminate\Support\Facades\Route;
use Webkul\Fawry\Http\Controllers\Shop\FawryController;

Route::group(['middleware' => ['web', 'theme', 'locale', 'currency'], 'prefix' => 'fawry'], function () {
    Route::get('', [FawryController::class, 'index'])->name('shop.fawry.index');
});