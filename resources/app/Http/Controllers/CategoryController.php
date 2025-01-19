<?php

namespace App\Http\Controllers;

use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function catNews()
    {
        return view('dashboard.page.category.category-news');
    }
    public function catArticle()
    {
        return view('dashboard.page.category.category-article');
    }
    public function catPengumuman()
    {
        return view('dashboard.page.category.category-pengumuman');
    }

    public function catAgenda()
    {
        return view('dashboard.page.category.category-agenda');
    }
}
