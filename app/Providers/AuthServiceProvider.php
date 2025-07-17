<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\TITtask;
use App\Models\TITcategory;
use App\Policies\TITtaskPolicy;
use App\Policies\TITcategoryPolicy;



class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        TITtask::class => TITtaskPolicy::class,
        TITcategory::class => TITcategoryPolicy::class,
    ];
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('TIT-manage-categories', fn($user) => $user->role === 'Admin');
    }
}
