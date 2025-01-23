<?php

namespace App\Http\Controllers;

use App\Services\HomePageService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected HomePageService $homePageService;
    public function __construct(
        HomePageService $homePageService
     ){
        $this->homePageService = $homePageService;
      }

    public function homePage(){
        $data = $this->homePageService->HomePageData();
        return view('dprdtd.page.home')->with('data', $data);

    }
}
