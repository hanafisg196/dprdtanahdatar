<?php

namespace App\Http\Controllers;

use App\Services\DashboardService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    protected DashboardService $dashboardService;
    public function __construct(
        DashboardService $dashboardService

    ){
        $this->dashboardService = $dashboardService;
    }
    public function index()
    {
        $data = $this->dashboardService->getViews();

        return view('dashboard.page.dashboard')->with('data', $data);
    }
}
