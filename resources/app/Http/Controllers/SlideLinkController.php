<?php

namespace App\Http\Controllers;

use App\Services\SlideLinkService;
use Illuminate\Http\Request;

class SlideLinkController extends Controller
{
    protected SlideLinkService $slideLinkService;

    public function __construct(
        SlideLinkService $slideLinkService
    ){
        $this->slideLinkService = $slideLinkService;
    }
    public function createSlideLink(Request $request){
        $this->slideLinkService->create($request);
        return redirect()->back()->with('success', 'Slide link berhasil ditambahkan');
    }
    public function updateSlideLink(Request $request, $id){
        $this->slideLinkService->update($request, $id);
        return redirect()->back()->with('success', 'Slide link berhasil di ubah');
    }
    public function deleteSlideLink($id){
        $this->slideLinkService->delete($id);
        return redirect()->back()->with('success', 'Slide link berhasil di hapus');
    }


}
