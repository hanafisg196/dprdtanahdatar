<?php

namespace App\Http\Controllers;

use App\Services\SettingService;
use Illuminate\Http\Request;

class ImageSliderController extends Controller
{
    protected SettingService $settingService;

   public function __construct(
    SettingService $settingService
   ){
        $this->settingService = $settingService;
    }
    public function createSlide(Request $request){
        $this->settingService->createSliderImage($request);
        return redirect()->back()->with('success', 'Slide berhasil ditambahkan');
    }
    public function updateSlide(Request $request, $id){
        $this->settingService->updateSlide($request, $id);
        return redirect()->back()->with('success', 'Slide berhasil diubah');
    }
    public function deleteSlide($id){
        $this->settingService->delete($id);
        return redirect()->back()->with('success', 'Slide berhasil dihapus');
    }

}
