<?php

namespace App\Providers;

use App\Services\Impl\SettingServiceImpl;
use App\Services\SettingService;
use Illuminate\Support\ServiceProvider;

class SettingServiceProvider extends ServiceProvider
{

    public array $singletons = [
        SettingService::class => SettingServiceImpl::class
    ];

    public function provides(): array
    {
        return [
            SettingService::class
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
