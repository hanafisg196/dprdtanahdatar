<?php
namespace App\Services\Impl;

use App\Models\Agenda;
use App\Models\Category;
use App\Models\Member;
use App\Models\News;
use App\Models\Party;
use App\Services\HomePageService;
class HomePageServiceImpl implements HomePageService
{
    public function homePageData()
    {
        $headlines = News::with(['images', 'categories'])
            ->where('headline', 1)
            ->where('status', 1)
            ->latest()
            ->get();
        $latestNews = News::with(['images', 'categories'])
            ->latest()
            ->get();
        $leaders = Member::with('images')
            ->whereIn('status', ['ketua', 'wakil ketua'])
            ->get();
        $members = Member::with('images')->where('status', 'anggota')->get();

        $blogTabs = Category::with(['news' => function ($query) {
            $query->limit(10)->with('images');
        }])->limit(8)->get();



        $partiesMember = Party::with('members')->get();
        $agendas =  Agenda::latest()->limit(5)->get();
        $randomNews = News::latest()->limit(5)->get();
        return [
            'headlines' => $headlines,
            'latestNews' => $latestNews,
            'leaders' => $leaders,
            'members' => $members,
            'partiesMember' => $partiesMember,
            'agendas' => $agendas,
            'randomNews' => $randomNews,
            'blogTabs' => $blogTabs
        ];
    }
    public function getLeader()
    {
    }
    public function getMember()
    {
    }
}
