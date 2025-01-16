<?php

namespace App\Services\Impl;

use App\Models\SlideLink;
use App\Services\SlideLinkService;
use Illuminate\Http\Request;

class SlideLinkServiceImpl implements SlideLinkService
{
    private function validation($request)
    {
        return $request->validate([
            'judul' => 'required|string|max:100',
            'link' => 'required|url',
        ]);
    }
    public function create(Request $request)
    {
        $validated = $this->validation($request);
        SlideLink::create([
            'title' => $validated['judul'],
            'link' => $validated['link'],
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = $this->validation($request);
        $slideLink = SlideLink::find($id);
        $slideLink->update([
            'title' => $validated['judul'],
            'link' => $validated['link'],
        ]);
    }

    public function delete($id){
        $slideLink = SlideLink::find($id);
        $slideLink->delete();
    }

    public function getAll(){
        return SlideLink::latest()->paginate(8);
    }
}
