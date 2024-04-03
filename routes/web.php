<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataFeedController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');

    Route::fallback(function() {
        return view('pages/utility/404');
    });
});
