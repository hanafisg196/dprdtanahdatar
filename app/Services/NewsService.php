<?php
namespace App\Services;

use Illuminate\Http\Request;

interface NewsService {
    public function create(Request $request);
    public function getCategory();
    public function getNewsByUser();
    public function getNewsById($id);
    public function update(Request $request,$id);
    public function delete($id);
    public function getNewsDetail($slug);
}
