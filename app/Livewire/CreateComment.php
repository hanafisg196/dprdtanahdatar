<?php

namespace App\Livewire;

use App\Models\Comment;
use App\Services\CommentService;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\WithPagination;

class CreateComment extends Component
{
    use WithPagination;
    #[Validate('required|string')]
    public $nama;

    #[Validate('nullable|url')]
    public $website;

    #[Validate('required|email')]
    public $email;

    #[Validate('required|string|max:200')]
    public $komentar;

    public $perPage = 5;

    public $newsId;


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
        $this->validate();
        Comment::create([
            'name' => $this->nama,
            'email' => $this->email,
            'website' =>  $this->website,
            'message' =>  $this->komentar,
            'news_id' => $this->newsId
        ]);
        $this->resetForm();
        $this->dispatch('comment-created', ['message' => 'Komentar berhasil ditambahkan.']);
    }
    public function loadMore()
    {
        $this->perPage += 5;
    }
    private function resetForm() {
        $this->nama = '';
        $this->website = '';
        $this->email = '';
        $this->komentar = '';
    }
    public function render()
    {
        $comments = Comment::where('news_id' , $this->newsId)->latest()->paginate($this->perPage);

        return view('livewire.create-comment')->with('comments', $comments);
    }

}
