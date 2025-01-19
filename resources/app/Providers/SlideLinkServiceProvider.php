<?php

namespace App\Providers;

use App\Services\Impl\SlideLinkServiceImpl;
use App\Services\SlideLinkService;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class SlideLinkServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public array $singletons = [
        SlideLinkService::class => SlideLinkServiceImpl::class
    ];

    public function provides(): array
    {
        return [
            SlideLinkService::class
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
