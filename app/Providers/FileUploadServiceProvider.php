<?php

namespace App\Providers;

use App\Services\FileUploadService;
use App\Services\Impl\FileUploadServiceImpl;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class FileUploadServiceProvider extends ServiceProvider implements DeferrableProvider
{

    public array $singletons = [
        FileUploadService::class => FileUploadServiceImpl::class
    ];

    public function provides():array
    {
        return [
            FileUploadService::class
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
