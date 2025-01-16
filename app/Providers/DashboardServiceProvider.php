<?php

namespace App\Providers;

use App\Services\DashboardService;
use App\Services\Impl\DahsboardServiceImpl;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     */
    public array $singletons = [
        DashboardService::class => DahsboardServiceImpl::class
    ];

    public function provides() : array
    {
        return [
            DashboardService::class
        ];
    }


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
