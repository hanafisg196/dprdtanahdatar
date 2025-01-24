<?php

namespace App\Livewire;

use App\Models\Agenda;
use Livewire\Component;

class LatestAgenda extends Component
{
    public $agendas;

    public function mount(){
        $this->getLatestAgenda();
     }

     public function placeholder(){
        return view('placeholder.component.center-spinner');
    }

    public function getLatestAgenda(){
        $this->agendas = Agenda::where('status', 1)->inRandomOrder()
        ->limit(5)->get();
    }

    public function render()
    {
        return view('livewire.latest-agenda');
    }
}
