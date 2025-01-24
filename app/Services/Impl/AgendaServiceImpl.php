<?php
namespace App\Services\Impl;

use App\Models\Agenda;
use App\Services\AgendaService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class AgendaServiceImpl implements AgendaService
{

    private function user(){
        $user = Auth::user()->id;
        if(!$user){
            return response()->json(['error' => 'User Not Found'], 401);
        } else{
            return $user;
        }
    }
    private function decrypt($payload)
    {
        return Crypt::decrypt($payload);
    }

    private function validation($request){
        return  $request->validate([
            'agenda' => 'required|string',
            'status' => 'required|numeric',
            'mulai' => 'required|string|date',
            'selesai' => 'required|string|date',
            'tempat' => 'required|string',
            'kategori' => 'required|numeric',
        ]);

    }

    public function getAgendaByUser()
    {
        $user = $this->user();
        return Agenda::where('user_id' , $user )->latest()->paginate(10);
    }
    public function getAgendaById($id)
    {
        $user = $this->user();
        $id = $this->decrypt($id);
        return Agenda::where('user_id', $user)->find($id);
    }

    public function createAgenda(Request $request)
    {
        $user = $this->user();
        $validated = $this->validation($request);
        return Agenda::create([
            'title' => $validated['agenda'],
            'waktu_mulai' => $validated['mulai'],
            'waktu_selesai' => $validated['selesai'],
            'tempat' => $validated['tempat'],
            'status' => $validated['status'],
            'cat_id' => $validated['kategori'],
            'user_id' => $user,
        ]);
    }
    public function updateAgenda(Request $request,$id){
        $this->user();
        $validated = $this->validation($request);
        $agenda = $this->getAgendaById($id);
        $agenda->update([
            'title' => $validated['agenda'],
            'waktu_mulai' => $validated['mulai'],
            'waktu_selesai' => $validated['selesai'],
            'status' => $validated['status'],
            'tempat' => $validated['tempat'],
            'cat_id' => $validated['kategori'],
        ]);
    }

    public function deleteAgenda($id){
        $this->user();
        $agenda = $this->getAgendaById($id);
        if(!$agenda){
            return response()->json(['error' => 'Data Not Found'], 404);
        }
        $agenda->delete();

    }

    public function getAgendaList(){
        return Agenda::latest()->paginate(10);
    }


}
