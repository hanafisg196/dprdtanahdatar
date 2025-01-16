<?php

namespace App\Livewire;

use App\Models\Link;
use Livewire\Component;

class LinkSkpdLive extends Component
{
    public $categoryName = 'Sekretariat';
    public $links;

    public function mount(){
        $this->getLinkSkpd();
    }
    public function placeholder(){
        return view('placeholder.component.medium-spinner-center');
    }
    public function getLinkSkpd(){
      $this->links = Link::with('categories')
        ->whereHas('categories', function ($query) {
            $query->where('name', $this->categoryName);
        })->get();
     }

     public function changeCategory($categoryName)
     {
         $this->categoryName = $categoryName;
         $this->getLinkSkpd();
     }

    public function render()
    {
        return view('livewire.link-skpd-live');
    }
}
