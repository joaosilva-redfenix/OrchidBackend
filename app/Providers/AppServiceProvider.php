<?php

namespace App\Providers;

use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;
use Orchid\Platform\Dashboard;

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
    public function boot(Dashboard $dashboard): void
    {
        // $dashboard->registerResource('scripts',Vite::isRunningHot() ? Vite::hotAsset('resources/js/app.js') : Vite::asset('resources/js/app.js'));
        // $dashboard->registerResource('stylesheets',Vite::isRunningHot() ? Vite::hotAsset('resources/css/app.css') : Vite::asset('resources/css/app.css'));
    }
}