<?php

namespace App\Livewire;

use App\Services\ProfileService;
use Livewire\Component;

class CardProfileLive extends Component
{
    public $profile;
    protected ProfileService $profileService;
    public function boot(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }

    public  function mount(){
        $this->profile = $this->cardProfile();
    }

    public function cardProfile()
    {
      return  $this->profileService->getCardProfile();

    }

    public function render()
    {
        return view('livewire.card-profile-live');
    }
}
