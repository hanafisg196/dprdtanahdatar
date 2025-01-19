<?php

namespace App\Providers;

use App\Services\CommentService;
use App\Services\Impl\CommentServiceImpl;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class CommentServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public array $singletons = [
        CommentService::class => CommentServiceImpl::class
    ];
    public function provides() : array
    {
        return [
            CommentService::class
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
