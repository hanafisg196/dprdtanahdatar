<?php

namespace App\Services\Impl;

use App\Models\Images;
use App\Models\Member;
use App\Models\Party;
use App\Models\Temporary;
use App\Services\MemberService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class MemberServiceImpl implements MemberService
{
    public function getParties(){
        return Party::with('images')->latest()->get();
    }

    public function getMembers(){
        return Member::with(['images','tags'])->latest()->paginate(8);
    }

    public function copyTemporaryFile($tmpFile, $field, $fileId)
    {
        foreach ($tmpFile as $item) {

            $sourcePath = $item->file;
            $destinationPath = 'images/' . basename($sourcePath);
            Storage::copy($sourcePath, $destinationPath);

            if ($field && $fileId) {
                $oldImages = Images::where($field, $fileId)->get();
                foreach ($oldImages as $oldImage) {
                    Storage::delete($oldImage->image);
                    $oldImage->delete();
                }
            }

            Images::create([
                $field => $fileId,
                'image' => $destinationPath,
            ]);

            Storage::delete($sourcePath);
            $item->delete();
        }
    }

    public function createParty(Request $request){
        $sessionId = Session::getId();
        $temporaryFiles = Temporary::where('session_id', $sessionId)->get();
        $validated =  $request->validate([
            'nama' => 'required|string|max:150',
            'singkatan' => 'nullable|string|max:10',
        ]);
        $party = Party::create([
            'name' => $validated['nama'],
            'initial' => $validated['singkatan'],
        ]);
        $this->copyTemporaryFile($temporaryFiles,'party_id',$party->id);
    }


    public function updateParty(Request $request, $id){
        $sessionId = Session::getId();
        $temporaryFiles = Temporary::where('session_id', $sessionId)->get();
        $validated =  $request->validate([
            'nama' => 'required|string|max:150',
            'singkatan' => 'nullable|string|max:10',
        ]);
        $party = Party::find($id);
        $party->update([
            'name' => $validated['nama'],
            'initial' => $validated['singkatan']
        ]);
        $this->copyTemporaryFile($temporaryFiles,'party_id',$party->id);
    }

    public function deleteParty($id)
    {
        $party = Party::find($id);

        if ($party) {
            $images = Images::where('party_id', $id)->get();

            foreach ($images as $image) {
                if ($image) {
                    Storage::delete($image->image);
                    $image->delete();
                }
            }
            $party->delete();
        }
    }
    public function memberDetail($slug){
      return  Member::with('images')->find($slug);
    }


    public function createMember(Request $request){
        $sessionId = Session::getId();
        $temporaryFiles = Temporary::where('session_id', $sessionId)->get();
        $jabatan = explode(',', $request->tags);
        $validated =  $request->validate([
            'nama' =>  'required|string|max:150',
            'lahir' => 'required|string|max:150',
            'agama' => 'required|string|max:15',
            'dapil' => 'required|string|max:180',
            'partai'=> 'required|numeric',
            'status' => 'required|string'
        ]);
        $member =  Member::create([
            'nama' => $validated['nama'],
            'lahir' => $validated['lahir'],
            'agama' => $validated['agama'],
            'dapil' => $validated['dapil'],
            'party_id' => $validated['partai'],
            'status' => $validated['status']
        ]);
        if (!empty($jabatan)) {
            $member->attachTags($jabatan);
        }

        $this->copyTemporaryFile($temporaryFiles, 'member_id',$member->id);
    }

    public function updateMember(Request $request, $id){
        $sessionId = Session::getId();
        $temporaryFiles = Temporary::where('session_id', $sessionId)->get();
        $jabatan = array_filter(explode(',', $request->tags));
        $validated =  $request->validate([
            'nama' =>  'required|string|max:150',
            'lahir' => 'required|string|max:150',
            'agama' => 'required|string|max:15',
            'dapil' => 'required|string|max:180',
            'partai'=> 'required|numeric',
            'status' => 'required|string',
        ]);
        $member = Member::find($id);
        $member->update([
            'nama' => $validated['nama'],
            'lahir' => $validated['lahir'],
            'agama' => $validated['agama'],
            'dapil' => $validated['dapil'],
            'party_id' => $validated['partai'],
            'status' => $validated['status'],
        ]);
        if (!empty($jabatan)) {
            $member->attachTags($jabatan);
        }
        $this->copyTemporaryFile($temporaryFiles, 'member_id',$member->id);
    }

    public function deleteMember($id)
    {
        $member = Member::find($id);

        if ($member) {
            $images = Images::where('member_id', $id)->get();

            foreach ($images as $image) {
                if ($image) {
                    Storage::delete($image->image);
                    $image->delete();
                }
            }
            $member->delete();
        }
    }

    public function getDetailMemberBySlug($slug){
         return Member::with(['images','parties.images','tags'])->where('slug', $slug)->first();
    }

    public function searchMember(Request $request)
    {
        $search = $request->input('search');
        $member = Member::query();
        if ($search) {
            $member
                ->where('nama', 'LIKE', '%' . $search . '%')
                ->with('images')
                ->orWhereHas('parties', function ($query) use ($search) {
                    $query->where('name', 'LIKE', '%' . $search . '%');
                });
        }
        return $member->paginate(10);
    }

}
