<?php

namespace App\Http\Controllers;

use App\Services\ArticleService;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private ArticleService $articleService;

    public function __construct(ArticleService $articleService) {
        $this->articleService = $articleService;
    }
    public function index(){
        $data = $this->articleService->getArticle();
        return view('dashboard.page.article.article-list')->with('data', $data);
    }

    public function form(){
        $category = $this->articleService->getCatgoryArticle();
        return view('dashboard.page.article.article-create')->with('category', $category);
    }

    public function store(Request $request){
        $this->articleService->create($request);
        return redirect()->route('dashboard.article.list');
    }

    public function show($id){
       $category = $this->articleService->getCatgoryArticle();
       $data =  $this->articleService->getArticleById($id);
        return view('dashboard.page.article.article-show')->with([
            'category' => $category,
            'data' => $data,
        ]);
    }

    public function update(Request $request, $id){
       $this->articleService->update($request, $id);
       return redirect()->back()->with('success', 'Artikel berhasil perbarui');
    }

    public function preview($id){
      $data =  $this->articleService->getArticleById($id);
      return view('dashboard.page.article.article-preview-post')->with('data', $data);
    }

    public function delete($id){
        $this->articleService->delete($id);
        return redirect()->back()->with('success', 'Artikel berhasil dihapus');
     }
}
