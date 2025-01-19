<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\MemberService;
use Illuminate\Http\Request;

class MemberController extends Controller
{

   protected MemberService $memberService;

   public function __construct(
      MemberService $memberService
   ){
      $this->memberService = $memberService;
    }

   public function memberList(){
    
    return view('dashboard.page.dprd.member-list');
   }
   
   public function memberRegister(){
    return view('dashboard.page.dprd.member-registration');
   }

   public function getParties(){
      $parties = $this->memberService->getParties();
      return view('dashboard.page.dprd.member-party-list')->with('parties' ,$parties);
   }
   
   public function partyForm(){
      return view('dashboard.page.dprd.member-party-new');
   }

   public function createParty(Request $request){
      // dd($request->all());
      $this->memberService->createParty($request);
      return redirect()->back()->with('success', 'Slide berhasil ditambahkan');
   }
}
