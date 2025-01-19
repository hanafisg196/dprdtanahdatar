<?php
namespace App\Services;

use Illuminate\Http\Request;

interface MemberService {

    public function getParties();
    public function createParty(Request $request);
    public function createMember(Request $request);

}
