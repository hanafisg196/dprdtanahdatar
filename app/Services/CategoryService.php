<?php
namespace App\Services;

use Illuminate\Http\Request;

interface CategoryService{
    public function get($id);
    public function getCategory();
    public function createCategory(Request $request);
    public function deleteCategory($id);
    public function updateCategory(Request $request, $id);

    public function getCategoryArticle();
    public function createCategoryArticle(Request $request);
    public function deleteCategoryArticle($id);
    public function getCategoryArticleById($id);
    public function updateCategoryArticle(Request $request, $id);

    public function getCategoryPengumuman();
    public function createCategoryPengumuman(Request $request);
    public function deleteCategoryPengumuman($id);
    public function getCategoryPengumumanById($id);
    public function updateCategoryPengumuman(Request $request, $id);


    public function getCategoryAgenda();
    public function createCategoryAgenda(Request $request);
    public function updateCategoryAgenda(Request $request, $id);
    public function deleteCategoryAgenda($id);
    public function getCategoryAgendaById($id);


}
