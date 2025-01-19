<?php
namespace App\Services\Impl;

use App\Models\ImageSlider;
use App\Models\Temporary;
use App\Services\SettingService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class SettingServiceImpl implements SettingService {
    public function createSliderImage(Request $request){
        $validated = $request->validate([
            'judul' => 'required|string|max:150',
        ]);
        $sessionId = Session::getId();
        $temporaryFiles = Temporary::where('session_id', $sessionId)->get();
        foreach ($temporaryFiles as $item) {
            $sourcePath = $item->file;
            $destinationPath = 'baner/images/' . basename($sourcePath);
            Storage::copy($sourcePath, $destinationPath);
        }

        ImageSlider::create([
            'file' => $destinationPath,
            'title' => $validated['judul'],
        ]);
    }

    public function getSlide(){
      return  ImageSlider::latest()->paginate(5);
    }

    public function updateSlide(Request $request, $id){
        $slide  = ImageSlider::find($id);
        $validated = $request->validate([
            'judul' => 'required|string|max:150',
        ]);

        $sessionId = Session::getId();
        $temporaryFiles = Temporary::where('session_id', $sessionId)->get();


        if($request->has('file')){
            foreach ($temporaryFiles as $item) {
                if ($slide->file && Storage::exists($slide->file)) {
                    Storage::delete($slide->file);
                }
                $sourcePath = $item->file;
                $destinationPath = 'baner/images/' . basename($sourcePath);
                Storage::copy($sourcePath, $destinationPath);
               }
            $slide->update([
                'title' => $validated['judul'],
                'file' => $destinationPath
            ]);
        } else {
            $slide->update([
                'title' => $validated['judul']
            ]);
        }

    }

    public function delete($id){
        $slide  = ImageSlider::find($id);
        Storage::delete($slide->file);
        $slide->delete();
    }
}
