<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\CommentService;
use App\Services\NewsService;
use Illuminate\Http\Request;

class NewsPageController extends Controller
{
    protected NewsService $newsService;
    protected CommentService $commentService;
    public function __construct(
        NewsService $newsService,
        CommentService $commentService
    ){
        $this->newsService = $newsService;
        $this->commentService = $commentService;
    }

   public function detailNews($slug){
     $news = $this->newsService->getNewsDetail($slug);
     return view('tanahdatar.page.detail')->with('news', $news);
    }

   public function createComment(Request $request,$newsId){
        $this->commentService->createComment($request, $newsId);
        return redirect()->back();
    }

}
