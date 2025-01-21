<?php
namespace App\Services\Impl;

use App\Models\News;
use App\Services\HomePageService;
class  HomePageServiceImpl implements HomePageService {
    public function getHedline(){
        $headlines  = News::with(['images', 'categories'])
        ->where('headline', 1)
        ->where('status', 1)
        ->latest()->get();

        $latestNews  = News::with(['images', 'categories'])
        ->latest()->get();

        return [
        'headlines' => $headlines,
        'latestNews' => $latestNews,
        ];

    }
    public function getLeader(){

    }
    public function getMember(){

    }
}
