<?php

namespace App\Providers;

use App\Models\Menu;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class GlobalItemProvider extends ServiceProvider
{
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
        $this->getHeaderMenu();
    }

    private function getHeaderMenu(){
        View::composer('*', function ($view) {
            $menu = Menu::with('subMenus')->get();
            $view->with('menu', $menu);
        });
    }


}
