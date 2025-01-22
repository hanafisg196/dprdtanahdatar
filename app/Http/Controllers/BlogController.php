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
}
