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

    public function copyTemporaryFile($tmpFile,$field, $fileId)
    {
        foreach ($tmpFile as $item) {
            $sourcePath = $item->file;
            $destinationPath = 'images/' . basename($sourcePath);

            Storage::copy($sourcePath, $destinationPath);
            $images = Images::where($field, $fileId)->get();
            if ($images->isNotEmpty()) {
                foreach ($images as $item) {
                    Storage::delete($item->image);
                    Storage::delete($item->thumbnail);
                    $item->delete();
                }
            }
            Images::create([
                'party_id' => $fileId,
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
            'singkatan' => 'required|string|max:10',
        ]);
        $party = Party::create([
            'name' => $validated['nama'],
            'initial' => $validated['singkatan'],
        ]);
        $this->copyTemporaryFile($temporaryFiles,'party_id',$party->id);
    }

    public function createMember(Request $request){
        $sessionId = Session::getId();
        $temporaryFiles = Temporary::where('session_id', $sessionId)->get();
        $validated =  $request->validate([
            'nama' => 'required|string|max:150',
            'lahir' => 'required|string|max:150',
            'agama' => 'required|string|max:15',
            'dapil' => 'required|string|max:180',
            'partai' => 'required|numeric'
        ]);
        $member =  Member::create([
            'nama' => $validated['nama'],
            'lahir' => $validated['lahir'],
            'agama' => $validated['agama'],
            'foto' => $validated['file'],
            'dapil' => $validated['dapil'],
            'partai' => $validated['partai']
        ]);
        $this->copyTemporaryFile($temporaryFiles, 'member_id',$member->id);

    }

}