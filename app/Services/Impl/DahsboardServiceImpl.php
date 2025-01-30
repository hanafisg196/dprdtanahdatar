<?php
namespace App\Services\Impl;

use App\Models\Member;
use App\Models\News;
use App\Models\Party;
use App\Services\DashboardService;
class  DahsboardServiceImpl implements DashboardService {
    public function getViews(){
            $member = Member::count();
            $parties = Party::count();
            $news = News::count();
            return [
                'member' => $member,
                'parties' => $parties,
                'news' => $news,
            ];
    }
}
