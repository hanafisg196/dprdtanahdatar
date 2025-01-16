<?php
namespace App\Services;

use Illuminate\Http\Request;

interface LinkService {
    public function getLink();
    public function getCategory();
    public function createLink(Request $request);
    public function deleteLink($id);
    public function updateLink(Request $request, $id);
    public function craeteCategory(Request $request);
    public function updateCategory(Request $request, $id);
    public function deleteCategory($id);
    public function getCatList();
}
