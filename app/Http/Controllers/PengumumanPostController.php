<?php

namespace App\Http\Controllers;


use App\Services\PengumumanService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
class PengumumanPostController extends Controller
{
    private $pengumumanService;

    public function __construct(PengumumanService $pengumumanService)
    {
        $this->pengumumanService = $pengumumanService;
    }
    public function index()
    {
        $data = $this->pengumumanService->getPengumumanByUser();
        return view('dashboard.page.pengumuman.pengumuman-list')->with('data', $data);
    }
    public function form()
    {
        $category = $this->pengumumanService->getCategories();
        return view('dashboard.page.pengumuman.pengumuman-create')->with('category', $category);
    }
    public function create(Request $request)
    {
        $this->pengumumanService->saveData($request);
        return redirect()->route('dashboard.pengumuman.list')->with('success', 'Pengumumam berhasil dibuat');
    }
    public function show($id)
    {
        $data = $this->pengumumanService->getPengumumanById($id);
        $category = $this->pengumumanService->getCategories();

        return view('dashboard.page.pengumuman.pengumuman-show')->with([
            'category' => $category,
            'data' => $data,
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->pengumumanService->updateData($request, $id);
        return redirect()->back()->with('success', 'Pengumumam berhasil dibuat');
    }

    public function delete($id){
        $this->pengumumanService->delete($id);
        return redirect()->back()->with('success', 'pengumumam berhasil di hapus');
    }
}
