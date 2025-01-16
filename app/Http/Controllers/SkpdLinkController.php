<?php

namespace App\Http\Controllers;

use App\Services\SkpdLinkService;
use Illuminate\Http\Request;

class SkpdLinkController extends Controller
{
    protected SkpdLinkService $skpdLinkService;

    public function __construct(
        SkpdLinkService $skpdLinkService
    ){
        $this->skpdLinkService = $skpdLinkService;
    }

    public function createSkpdLink(Request $request){
        $this->skpdLinkService->create($request);
        return redirect()->back()->with('success', 'Link berhasil ditambahkan');
    }
    public function updateSkpdLink(Request $request, $id){
        $this->skpdLinkService->update($request, $id);
        return redirect()->back()->with('success', 'Link berhasil di ubah');
    }
    public function deleteSkpdLink($id){
        $this->skpdLinkService->delete($id);
        return redirect()->back()->with('success', 'Link berhasil di hapus');
    }

}
