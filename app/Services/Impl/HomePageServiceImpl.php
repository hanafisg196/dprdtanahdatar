<?php
namespace App\Services\Impl;

use App\Models\Member;
use App\Models\News;
use App\Models\Party;
use App\Services\HomePageService;
class HomePageServiceImpl implements HomePageService
{
    public function getHedline()
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
        $kegiatans = News::with(['images', 'categories'])
            ->whereHas('categories', function ($query) {
                $query->where('nama', 'kegiatan');
            })
            ->latest()
            ->limit(10)
            ->get();
        $rapats = News::with(['images', 'categories'])
            ->whereHas('categories', function ($query) {
                $query->where('nama', 'rapat & acara');
            })
            ->latest()
            ->limit(10)
            ->get();
        $artikels = News::with(['images', 'categories'])
            ->whereHas('categories', function ($query) {
                $query->where('nama', 'artikel');
            })
            ->latest()
            ->limit(10)
            ->get();
        $partiesMember = Party::with('members')->get();
        return [
            'headlines' => $headlines,
            'latestNews' => $latestNews,
            'leaders' => $leaders,
            'members' => $members,
            'kegiatans' => $kegiatans,
            'rapats' => $rapats,
            'artikels' => $artikels,
            'partiesMember' => $partiesMember,
        ];
    }
    public function getLeader()
    {
    }
    public function getMember()
    {
    }
}
