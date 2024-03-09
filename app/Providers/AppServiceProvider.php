<?php

namespace App\Providers;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
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
        //Creating a link between the public folder and the storage folder
        Storage::makeDirectory('public');
        if (!Storage::exists('public/storage')) {
            Artisan::call('storage:link');
        }
    }
}
