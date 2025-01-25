<?php

namespace App\Http\Controllers;

use App\Services\HomePageService;
use App\Services\NewsService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected HomePageService $homePageService;
    protected NewsService $newsService;
    public function __construct(
        HomePageService $homePageService,
        NewsService $newsService
     ){
        $this->homePageService = $homePageService;
        $this->newsService = $newsService;
      }

    public function homePage(){
        $data = $this->homePageService->HomePageData();
        return view('dprdtd.page.home')->with('data', $data);

    }
    public function searchNews(Request $request){
        $blogs = $this->newsService->searchNews($request);
        return view('dprdtd.page.search-blog-result')->with('blogs', $blogs);
    }

}
