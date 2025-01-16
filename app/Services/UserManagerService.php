<?php
namespace App\Services;

use Illuminate\Http\Request;

interface UserManagerService {
    public function getUsers();
    public function getOpds();
    public function registerUser(Request $request);
    public function getUserById($id);
    public function updateUser(Request $request, $id);
    public function delete($id);

}
