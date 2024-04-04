<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');

    Route::get('/members', [MemberController::class, 'index'])->name('member');

    Route::get('/warehouse', function () {
        return view('pages/warehouse/index');
    })->name('warehouse');

    Route::get('/club', function () {
        return view('pages/club/index');
    })->name('club');

    Route::get('/roles', function () {
        return view('pages/roles/index');
    })->name('roles');

    Route::fallback(function() {
        return view('pages/utility/404');
    });
});
