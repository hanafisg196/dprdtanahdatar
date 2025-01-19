<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;

class OtherNews extends Component
{
    public $randomNews;

    public function mount(){
       $this->getRandomNews();
    }
    public function placeholder(){
        return view('placeholder.component.center-spinner');
    }

    public function getRandomNews(){
        $this->randomNews = News::with('images')->inRandomOrder()->limit(5)->get();
    }

    public function render()
    {
        return view('livewire.other-news');
    }
}
