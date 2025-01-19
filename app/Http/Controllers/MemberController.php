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
    $members = $this->memberService->getMembers();
    return view('dashboard.page.dprd.member-list')->with('members', $members);
   }

   public function memberRegister(){
    $parties = $this->memberService->getParties();
    return view('dashboard.page.dprd.member-registration')->with('parties' ,$parties);
   }
   public function memberCreate(Request $request){
    $this->memberService->createMember($request);
    return view('dashboard.page.dprd.member-list');
   }

   public function getParties(){
      $parties = $this->memberService->getParties();
      return view('dashboard.page.dprd.member-party-list')->with('parties' ,$parties);
   }

   public function partyForm(){
      return view('dashboard.page.dprd.member-party-new');
   }

   public function createParty(Request $request){
      $this->memberService->createParty($request);
      return redirect()->back()->with('success', 'Partai berhasil ditambahkan');
   }

   public function updateParty(Request $request,$id){
    $this->memberService->updateParty($request,$id);
    return redirect()->back()->with('success', 'Partai berhasil diupdate');
 }

 public function deleteParty($id){
    $this->memberService->deleteParty($id);
    return redirect()->back()->with('success', 'Partai berhasil dihapus');
 }
}
