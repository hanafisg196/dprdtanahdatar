<?php

namespace App\Livewire;


use App\Services\FileUploadService;
use Livewire\Component;

class ClearTemporary extends Component
{
    protected FileUploadService $fileUploadService;

    public function boot(
        FileUploadService $fileUploadService
    ){
        $this->fileUploadService = $fileUploadService;
    }

    public function mount()
    {
        $this->clearTemporary();
    }

    public function clearTemporary()
    {
        $this->fileUploadService->clearTemporaryFile();
    }

    public function render()
    {
        return view('livewire.clear-temporary');
    }
}
