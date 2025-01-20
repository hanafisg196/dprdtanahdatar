<?php

namespace App\Livewire;

use App\Models\Member;
use Livewire\Component;

class DetachJabatan extends Component
{

    public $jabatanId;


    public $jabatan;
    public function mount($jabatanId){
        $this->jabatanId =  $jabatanId ;
    }
    public function detachJabatan($tagName){

        $this->jabatan->detachTag($tagName);
    }

    public function render()
    {
        $this->jabatan = Member::with('tags')->find($this->jabatanId);
        return view('livewire.detach-jabatan');
    }
}
