<?php

namespace App\Http\Controllers;

use App\Services\NewsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsPostController extends Controller
{
    private NewsService $newsService;
    public function __construct(NewsService $newsService)
    {
        $this->newsService = $newsService;
    }
    public function index()
    {

        $data = $this->newsService->getNewsByUser();
        return view('dashboard.page.news.news-list')->with([
            'data' => $data
        ]);
    }

    public function form() {
      $category = $this->newsService->getCategory();
      return view('dashboard.page.news.news-create')->with('category', $category);
   }

    public function store(Request $request)
    {
        $this->newsService->create($request);
        return redirect()->route('dashboard.news.post.list')->with('success', 'Berita berhasil dibuat');
    }

    public function delete($id){
        $this->newsService->delete($id);
        return redirect()->back()->with('success', 'Berita berhasil dihapus');
    }

    public function show($id){
        $category = $this->newsService->getCategory();
        $data = $this->newsService->getNewsById($id);
        return view('dashboard.page.news.news-show')->with([
            'category'=> $category,
            'data'=> $data
        ]);
    }

    public function update(Request $request, $id){
        $this->newsService->update($request, $id );
        return redirect()->back()->with('success', 'Berita berhasil Diperbarui');
    }

    public function preview($id){
        $data = $this->newsService->getNewsById($id);
        return view('dashboard.page.news.news-preview')->with('data', $data);
    }

    public function search(Request $request){
        $data = $this->newsService->searchNewsForDashboard($request);
        return view('dashboard.page.news.news-list')->with([
            'data' => $data
        ]);
    }

}
