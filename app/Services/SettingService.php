<?php

namespace App\Services;

use Illuminate\Http\Request;

interface SettingService {
    public function createSliderImage(Request $request);
    public function getSlide();
    public function updateSlide(Request $request, $id);
    public function delete($id);
}
