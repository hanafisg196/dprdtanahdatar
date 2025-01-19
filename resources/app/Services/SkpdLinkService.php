<?php
namespace App\Services;

use Illuminate\Http\Request;

interface SkpdLinkService {
    public function create(Request $request);
    public function update(Request $request, $id);
    public function delete($id);
    public function getAll();
}
