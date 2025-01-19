<?php
namespace App\Services\Impl;

use App\Services\RoleService;
use Illuminate\Support\Facades\Auth;

class RoleServiceImpl implements RoleService {

    private function getRoles($rule){
       return Auth::user()->roles->pluck('name')->intersect($rule)->isNotEmpty();
    }
    public function isAdmin(){
        $accesRole = "admin";
        return $this->getRoles($accesRole);
    }

}
