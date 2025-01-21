<?php

namespace App\Providers;

use App\Services\HomePageService;
use App\Services\Impl\HomePageServiceImpl;
use Illuminate\Support\ServiceProvider;

class HomePageServiceProvider extends ServiceProvider
{

    public array $singletons = [
        HomePageService::class => HomePageServiceImpl::class
    ];

    public function provides() : array
    {
        return [
            HomePageService::class
        ];
    }
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
