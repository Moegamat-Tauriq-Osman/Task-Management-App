<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\TITtask;
use App\Observers\TITtaskObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
         TITtask::observe(TITtaskObserver::class);
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }

    
}
