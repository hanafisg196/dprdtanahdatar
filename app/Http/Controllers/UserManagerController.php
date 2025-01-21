<?php

namespace App\Http\Controllers;

use App\Models\Opd;
use App\Services\UserManagerService;
use Illuminate\Http\Request;

class UserManagerController extends Controller
{
    protected UserManagerService $userManagerService;

    public function __construct(
        UserManagerService $userManagerService
    ){
        $this->userManagerService = $userManagerService;
    }
    public function index(){
        $users = $this->userManagerService->getUsers();
        return view('dashboard.page.users.users-manager')->with([
            'users' => $users,
        ]);
    }

    public function createForm(){
        return view('dashboard.page.users.users-create');
    }
    public function register(Request $request){
        $this->userManagerService->registerUser($request);
        return redirect()->route('dashboard.usermanager.list')->with('success', 'Registrasi Berhasil');
    }

    public function update(Request $request, $id){
        $this->userManagerService->updateUser($request,$id);
        return redirect()->back()->with('success', 'User berhasil di perbarui');
    }

    public function delete($id){
        $this->userManagerService->delete($id);
        return redirect()->route('dashboard.usermanager.list')->with('success', 'Data Berhasil Dihapus');
    }

}
