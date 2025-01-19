<?php
namespace App\Services\Impl;

use App\Models\CategoryLink;
use App\Models\Link;
use App\Services\LinkService;
use Illuminate\Http\Request;

class LinkServiceImpl implements LinkService
{
    public function getLink()
    {
        return Link::with('categories')->latest()->paginate(10);
    }
    public function getCategory()
    {
        return CategoryLink::latest()->get();
    }

    public function getCatList()
    {
        return CategoryLink::latest()->paginate(8);
    }

    private function validation(Request $request){
        return $request->validate([
            'title' => 'required|string',
            'link' => 'required|url',
            'category' => 'required|numeric',
        ]);
    }

    public function createLink(Request $request)
    {
        $validated = $this->validation($request);
        Link::create([
            'title' => $validated['title'],
            'link' => $validated['link'],
            'cat_id' => $validated['category'],
        ]);
    }

    public function deleteLink($id)
    {
        $link = Link::find($id);
        if ($link) {
            $link->delete();
        } else {
            return response()->json('Gagal Menghapus data');
        }
    }

    public function updateLink(Request $request, $id)
    {
        $validated = $this->validation($request);
        $link = Link::find($id);
        if($link ){
            $link->update([
                'title' => $validated['title'],
                'link' => $validated['link'],
                'cat_id' => $validated['category'],
            ]);
        }
    }

    public function craeteCategory(Request $request){
        $validated = $request->validate([
            'nama' => 'required|string'
        ]);
        CategoryLink::create([
            'name' => $validated['nama']
        ]);
    }
    public function updateCategory(Request $request, $id){
        $validated = $request->validate([
            'nama' => 'required|string'
        ]);
        $catLink = CategoryLink::find($id);
        if($catLink){
            $catLink->update([
            'name' => $validated['nama']
        ]);
        }
    }
    public function deleteCategory($id){
        $catLink = CategoryLink::find($id);
        if ($catLink) {
            $catLink->delete();
        } else {
            return response()->json('Gagal Menghapus data');
        }
    }
}
