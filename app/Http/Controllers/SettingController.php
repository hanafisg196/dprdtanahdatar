<?php

namespace App\Http\Controllers;

use App\Services\MenuService;
use App\Services\SettingService;
use App\Services\SkpdLinkService;
use App\Services\SlideLinkService;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    protected SettingService $settingService;
    protected MenuService $menuService;
    protected SlideLinkService $slideLinkService;
    protected SkpdLinkService $skpdLinkService;

    public function __construct(
        SettingService $settingService,
        MenuService $menuService,
        SlideLinkService $slideLinkService,
        SkpdLinkService $skpdLinkService
    )
    {
        $this->settingService = $settingService;
        $this->menuService = $menuService;
        $this->slideLinkService = $slideLinkService;
        $this->skpdLinkService = $skpdLinkService;
    }

    public function menu(){
        $menu = $this->menuService->getAllMenu();
        return view('dashboard.page.settings.menu')->with('menu', $menu);
    }

    public function slideImage()
    {
        $slide = $this->settingService->getSlide();
        return view('dashboard.page.settings.image-slider')
        ->with('slide', $slide);
    }

    public function slideLink(){
        $data = $this->slideLinkService->getAll();
        return view('dashboard.page.settings.link-slider')->with('data', $data);
    }

    public function skpdLink(){
        $data = $this->skpdLinkService->getAll();
        return view('dashboard.page.settings.link-skpd')->with('data', $data);
    }

}
