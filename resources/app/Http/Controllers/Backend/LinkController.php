<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Link;
use App\Services\LinkService;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    protected LinkService $linkService;
    public function __construct(LinkService $linkService)
    {
        $this->linkService = $linkService;
    }

    public function index()
    {
        $data = $this->linkService->getLink();
        $categories = $this->linkService->getCatList();
        return view('dashboard.page.settings.links')->with([
            'data' => $data,
            'categories' =>  $categories
        ]);
    }
    public function formAdd(){
        $categories = $this->linkService->getCategory();
        return view('dashboard.page.settings.link-add')
           ->with('categories',  $categories);
     }

    public function create(Request $request){
       $this->linkService->createLink($request);
       return redirect()->route('dashboard.settings.link.list')->with('success', 'Link berhasil dismpan');
    }

    public function delete($id){
        $this->linkService->deleteLink($id);
        return redirect()->back()->with('success', 'Link berhasil dihapus');
    }

    public function update(Request $request, $id){
        $this->linkService->updateLink($request,$id);
        return redirect()->back()->with('success', 'Link berhasil diubah');
    }

    public function createCategory(Request $request){
        $this->linkService->craeteCategory($request);
        return redirect()->back()->with('success', 'Kategori berhasil di tambahkan');
    }
    public function updateCategory(Request $request, $id){
        $this->linkService->updateCategory($request, $id);
        return redirect()->back()->with('success', 'Kategori berhasil di ubah');
    }
    public function deleteCategory($id){
        $this->linkService->deleteCategory($id);
        return redirect()->back()->with('success', 'Kategori berhasil di hapus');
    }
}
