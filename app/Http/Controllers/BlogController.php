<?php

namespace App\Http\Controllers;

use App\Services\NewsService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected NewsService $newsService;
    public function __construct(NewsService $newsService)
    {
        $this->newsService = $newsService;
    }

    public function getDetailBlog($slug)
    {
        $blog = $this->newsService->getNewsDetail($slug);
        return view('dprdtd.page.detail-blog')->with('blog', $blog);
    }

    public function getNews(){
       $blogs =  $this->newsService->getNews();
        return view('dprdtd.page.list-blog')->with('blogs', $blogs);
    }
}
