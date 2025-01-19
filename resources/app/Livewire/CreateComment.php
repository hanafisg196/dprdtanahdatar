<?php

namespace App\Livewire;

use App\Models\Comment;
use App\Services\CommentService;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\Attributes\On;
class CreateComment extends Component
{
    public $nama;
    public $website;
    public $email;
    public $komentar;
    public $newsId;
    public $comment;
    protected CommentService $commentService;

    public function boot(
        CommentService $commentService
    ){
        $this->commentService = $commentService;
    }

    #[On('make-comment')]

    public function mount($newsId){
        $this->newsId = $newsId;
    }
    public function makeComment()
    {
        $request = new Request([
            'nama' => $this->nama,
            'website' => $this->website,
            'email' => $this->email,
            'komentar' => $this->komentar
        ]);
        $this->commentService->createComment($request,$this->newsId);
        $this->resetForm();
        $this->dispatch('comment-created', ['message' => 'Komentar berhasil ditambahkan.']);
    }
    private function resetForm() {
        $this->nama = '';
        $this->website = '';
        $this->email = '';
        $this->komentar = '';
    }
    public function render()
    {
        $this->comment = Comment::where('news_id' , $this->newsId)->latest()->get();

        return view('livewire.create-comment')->with('comment', $this->comment);
    }

}
