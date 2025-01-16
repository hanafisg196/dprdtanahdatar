<?php

namespace App\Providers;

use App\Services\Impl\UserManagerServiceImpl;
use App\Services\UserManagerService;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class UserManagerProider extends ServiceProvider implements DeferrableProvider
{
    public array $singletons = [
        UserManagerService::class => UserManagerServiceImpl::class
    ];

    public function provides(): array
    {
        return [
            UserManagerService::class
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
