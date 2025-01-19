<?php
namespace App\Services\Impl;

use App\Models\User;
use App\Services\ProfileService;
use Illuminate\Support\Facades\Auth;

class ProfileServiceImpl implements ProfileService
{
    public function getCardProfile()
    {
        $user = Auth::user()->id;
        return User::where('id', $user)->first();
    }
}
