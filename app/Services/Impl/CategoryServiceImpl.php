<?php
namespace App\Services\Impl;

use App\Models\AgendaCategory;
use App\Models\ArticleCategory;
use App\Models\Category;
use App\Models\PengumumanCategory;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryServiceImpl implements CategoryService
{
    public function getCategory()
    {
        return Category::latest();
    }

    public function createCategory(Request $request)
    {
        $category = new Category();
        $validate = $request->validate([
            'nama' => 'required',
        ]);
        $category->create($validate);
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
    }

    public function get($id)
    {
        return Category::find($id);
    }
    public function updateCategory(Request $request, $id)
    {
        $validate = $request->validate([
            'nama' => 'required',
        ]);
        $category = Category::find($id);
        $category->update($validate);
    }

    public function getCategoryArticle()
    {
        return ArticleCategory::latest();
    }

    public function createCategoryArticle(Request $request)
    {
        $category = new ArticleCategory();
        $validate = $request->validate([
            'nama' => 'required',
        ]);
        $category->create($validate);
    }

    public function deleteCategoryArticle($id)
    {
        $category = ArticleCategory::find($id);
        $category->delete();
    }

    public function getCategoryArticleById($id)
    {
        return ArticleCategory::find($id);
    }
    public function updateCategoryArticle(Request $request, $id)
    {
        $validate = $request->validate([
            'nama' => 'required',
        ]);
        $category = ArticleCategory::find($id);
        $category->update($validate);
    }

    public function getCategoryPengumuman()
    {
        return PengumumanCategory::latest();
    }

    public function createCategoryPengumuman(Request $request)
    {
        $category = new PengumumanCategory();
        $validate = $request->validate([
            'nama' => 'required',
        ]);
        $category->create($validate);
    }

    public function deleteCategoryPengumuman($id)
    {
        $category = PengumumanCategory::find($id);
        $category->delete();
    }

    public function getCategoryPengumumanById($id)
    {
        return PengumumanCategory::find($id);
    }
    public function updateCategoryPengumuman(Request $request, $id)
    {
        $validate = $request->validate([
            'nama' => 'required',
        ]);
        $category = PengumumanCategory::find($id);
        $category->update($validate);
    }

    public function getCategoryAgenda()
    {
        return AgendaCategory::latest()->paginate(10);
    }
    public function createCategoryAgenda(Request $request)
    {
        $valdated = $request->validate([
            'nama' => 'required|string',
        ]);
        $category = new AgendaCategory();
        $category->create($valdated);
    }
    public function updateCategoryAgenda(Request $request, $id)
    {
        $valdated = $request->validate([
            'nama' => 'required|string',
        ]);
        $data  =  AgendaCategory::find($id);
        $data->update($valdated);
    }

    public function deleteCategoryAgenda($id)
    {
        $category = AgendaCategory::find($id);
        $category->delete();
    }

    public function getCategoryAgendaById($id)
    {
        return AgendaCategory::find($id);
    }
}
