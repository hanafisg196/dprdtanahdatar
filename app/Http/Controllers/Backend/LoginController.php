<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Services\LoginService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    private LoginService $loginService;
    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }

    public function index()
    {
        return view('dashboard.page.login');
    }

    public function doLogin(Request $request)
    {
       return $this->loginService->login($request);
    }

    public function doLogout()
    {
        return $this->loginService->logout();
    }
}
