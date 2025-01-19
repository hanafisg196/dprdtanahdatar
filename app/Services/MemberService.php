<?php
namespace App\Services;

use Illuminate\Http\Request;

interface MemberService {

    public function getParties();
    public function getMembers();
    public function createParty(Request $request);
    public function updateParty(Request $request, $id);
    public function createMember(Request $request);
    public function deleteParty($id);

}
