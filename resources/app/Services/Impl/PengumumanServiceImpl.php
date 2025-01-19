<?php
namespace App\Services\Impl;

use App\Models\Pengumuman;
use App\Models\PengumumanCategory;
use App\Services\PengumumanService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class PengumumanServiceImpl implements PengumumanService
{
    private function validation($request){
        return $request->validate([
            'judul' => 'required|string|max:120',
            'konten' => 'required|string',
            'kategori' => 'required|numeric',
            'status' => 'required|numeric',
            'description' => 'nullable|string|max:160',
            'keyword' => 'nullable|string|max:160'
        ]);
    }
    private function decrypt($payload){
        return Crypt::decrypt($payload);
    }
    private function user()
    {
        $user = Auth::user()->id;
        if (!$user) {
            return response()->json(['error' => 'User Not Found'], 401);
        } else {
            return $user;
        }
    }
    public function getPengumumanByUser()
    {
        $user = $this->user();
        return Pengumuman::where('user_id', $user)->latest()->paginate(6);
    }
    public function getPengumumanById($id){
        $id = $this->decrypt($id);
        $data = Pengumuman::find($id);
        if(!$data){
            abort(404, 'Pengumuman Tidak Ditemukan');
        }
        return $data;
    }

    public function getCategories()
    {
        return PengumumanCategory::latest()->get();
    }
    public function saveData(Request $request)
    {
        $user = $this->user();
        $validated = $this->validation($request);
        Pengumuman::create([
            'title' => $validated['judul'],
            'body' => $validated['konten'],
            'cat_id' => $validated['kategori'],
            'status' => $validated['status'],
            'description' => $validated['description'],
            'keyword' => $validated['keyword'],
            'user_id' => $user
        ]);
    }
    public function updateData(Request $request, $id)
    {
        $user = $this->user();
        $data = $this->getPengumumanById($id);
        $validated = $this->validation($request);
        $data->update([
            'title' => $validated['judul'],
            'body' => $validated['konten'],
            'cat_id' => $validated['kategori'],
            'status' => $validated['status'],
            'description' => $validated['description'],
            'keyword' => $validated['keyword'],
            'user_id' => $user,
        ]);
    }
    public function delete($id)
    {
        $this->user();
        $data = $this->getPengumumanById($id);
        $data->delete();
    }
}
