<?php
namespace App\Services\Impl;

use App\Models\Comment;
use App\Services\CommentService;
use Illuminate\Http\Request;

class CommentServiceImpl implements CommentService{

    public function getCommentById($newsId){
       return Comment::where('news_id', $newsId)->latest()->get();
    }

    public function createComment(Request $request, $newsId){
        $validated =  $request->validate([
            'nama' => 'required|string',
            'email' => 'required|email|',
            'website' => 'nullable|url|',
            'komentar' => 'required|string|max:200',
        ]);
        Comment::create([
            'name' => $validated['nama'],
            'email' => $validated['email'],
            'website' =>  $validated['website'],
            'message' =>  $validated['komentar'],
            'news_id' => $newsId
        ]);
    }
}
