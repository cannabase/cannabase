<?php

namespace App\Providers;

use App\Models\Club;
use App\Observers\ClubObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Club::observe(ClubObserver::class);
    }
}
