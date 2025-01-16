<?php
namespace App\Services;

use Illuminate\Http\Request;

interface PengumumanService {
    public function getPengumumanByUser();
    public function getCategories();
    public function saveData(Request $request);
    public function updateData(Request $request, $id);
    public function delete($id);
    public function getPengumumanById($id);
}
