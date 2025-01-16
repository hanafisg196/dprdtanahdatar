<?php
namespace App\Services;

use Illuminate\Http\Request;

interface ArticleService {
    public function getArticle();
    public function create(Request $request);
    public function getCatgoryArticle();
    public function getArticleById($id);
    public function update(Request $request, $id);
    public function delete($id);
}
