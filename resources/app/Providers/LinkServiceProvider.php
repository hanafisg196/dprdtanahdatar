<?php

namespace App\Providers;

use App\Services\Impl\LinkServiceImpl;
use App\Services\LinkService;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class LinkServiceProvider extends ServiceProvider implements DeferrableProvider
{

    public array $singletons = [
        LinkService::class => LinkServiceImpl::class
    ];

    public function provides():array
    {
        return [
            LinkService::class
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
