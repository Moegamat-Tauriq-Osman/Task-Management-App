<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Events\TaskDeadline;
use App\Listeners\DeadlineReminder;

class EventServiceProvider extends ServiceProvider
{

    protected $listen = [
        TaskDeadline::class => [
            DeadlineReminder::class,
        ],
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
        //
    }
}
