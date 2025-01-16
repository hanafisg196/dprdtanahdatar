<?php

namespace App\Providers;

use App\Services\Impl\SkpdLInkServiceImpl;
use App\Services\SkpdLinkService;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class SkpdLinkServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     */

     public array $singletons = [
        SkpdLinkService::class => SkpdLInkServiceImpl::class
    ];

    public function provides(): array
    {
        return [
            SkpdLinkService::class
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
