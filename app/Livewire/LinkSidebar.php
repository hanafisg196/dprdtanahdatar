<?php

namespace App\Livewire;

use App\Models\Link;
use Livewire\Component;

class LinkSidebar extends Component
{
    public $pemerintah;
    public $opd;

    public function mount(){
        $this->getLinkPemerintahan();
        $this->getLinkOpd();
    }

    public function placeholder(){
        return view('placeholder.component.center-spinner');
    }

    public function getLinkPemerintahan(){
        $this->pemerintah = Link::with('categories')
        ->whereHas('categories', function ($query) {
            $query->where('name', 'pemerintah');
        })->get();
    }

    public function getLinkOpd(){
        $this->opd = Link::with('categories')
        ->whereHas('categories', function ($query) {
            $query->where('name', 'opd');
        })->get();
    }

    public function render(){
        return view('livewire.link-sidebar');
    }
}
