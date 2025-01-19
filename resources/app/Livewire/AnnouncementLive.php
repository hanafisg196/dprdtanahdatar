<?php

namespace App\Livewire;

use App\Models\Agenda;
use App\Models\Article;
use App\Models\Pengumuman;
use Livewire\Component;

class AnnouncementLive extends Component
{
    public $announcements;
    public $agendas;
    public $articles;

    public function mount(){
        $this->announcement();
        $this->agendas();
        $this->articles();
    }

    public function placeholder(){
        return view('placeholder.component.medium-spinner-center');
    }
    public function announcement()
    {
        $this->announcements = Pengumuman::latest()->limit(5)->get();
    }
    public function agendas()
    {
        $this->agendas = Agenda::latest()->limit(5)->get();
    }
    public function articles()
    {
        $this->articles = Article::with(['images','articleCategories'])->latest()->limit(5)->get();
    }
    public function render()
    {
        return view('livewire.announcement-live');
    }
}
