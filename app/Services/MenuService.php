<?php
namespace App\Services;

use Illuminate\Http\Request;

interface MenuService{
    public function save(Request $request);
    public function getAllMenu();
    public function update(Request $request, $id);
    public function delete($id);
    public function createSubMenu(Request $request, $id);
    public function updateSubMenu(Request $request, $id);
    public function deleteSubMenu($id);

}
