<?php

namespace App\Providers;

use App\Services\ArticleService;
use App\Services\Impl\ArticleServiceImpl;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class ArticleServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public array $singletons =[
        ArticleService::class => ArticleServiceImpl::class
    ];

    public function provides() : array
    {
        return [
            ArticleService::class
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
