<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Images;
use App\Models\ImageSlider;
use App\Models\Link;
use App\Models\News;


class HomePageController extends Controller
{
    public function index(){
        $slideimage = ImageSlider::limit(10)->get();
        $breakingNews = Link::with('categories')
        ->whereHas('categories', function ($query) {
            $query->where('name', 'Teks Bergerak');
        })->get();

        $headlineData = News::with('images')->limit(5)->get();
        $headline = collect($headlineData);
        $news = News::with(['images','categories','users.opds'])->latest()->paginate(6);
        $galery = Images::latest()->limit(10)->get();

        return view('tanahdatar.page.home')->with([
            'slideimage' => $slideimage,
            'breakingNews' => $breakingNews,
            'headline' => $headline,
            'news' => $news,
            'galery' => $galery
        ]);

    }
}
