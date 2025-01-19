<?php

namespace App\Livewire;

use App\Services\RoleService;
use Livewire\Component;

class IsAdminMenu extends Component
{
    public bool $isAdmin;
    protected RoleService $roleService;
    public function boot(
        RoleService $roleService
    ){
        $this->roleService = $roleService;
    }

    public function mount(){
        $this->gateAccess();
    }

    private function gateAccess(){
        $this->isAdmin = $this->roleService->isAdmin();
    }

    public function render()
    {
        return view('livewire.is-admin-menu');
    }
}
