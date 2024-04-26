<?php
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


// routes/web.php

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Route::middleware('auth')->prefix('dashdoard')->name('dashboard.')->group(function () {

        Route::get('/check', [DashboardController::class, 'index'])->name('index');

    });

});

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/


Route::middleware('auth')->prefix('dashdoard')->name('dashboard.')->group(function () {

    Route::get('/check', [DashboardController::class, 'index'])->name('index');

});
