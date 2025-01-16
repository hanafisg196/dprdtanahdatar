<?php

namespace App\Services\Impl;

use App\Models\SkpdLink;
use App\Services\SkpdLinkService;
use Illuminate\Http\Request;

class SkpdLInkServiceImpl implements SkpdLinkService {
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
        SkpdLink::create([
            'title' => $validated['judul'],
            'link' => $validated['link'],
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = $this->validation($request);
        $skpdLink = SkpdLink::find($id);
        $skpdLink->update([
            'title' => $validated['judul'],
            'link' => $validated['link'],
        ]);
    }

    public function delete($id){
        $skpdLink = SkpdLink::find($id);
        $skpdLink->delete();
    }

    public function getAll(){
        return SkpdLink::latest()->paginate(8);
    }
}
