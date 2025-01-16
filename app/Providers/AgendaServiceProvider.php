<?php

namespace App\Providers;

use App\Services\AgendaService;
use App\Services\Impl\AgendaServiceImpl;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class AgendaServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public array $singletons =[
        AgendaService::class => AgendaServiceImpl::class
    ];

    public function provides() : array
    {
        return [
            AgendaService::class
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
