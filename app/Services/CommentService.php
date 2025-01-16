<?php
namespace App\Services;

use Illuminate\Http\Request;

interface CommentService{
    public function getCommentById($newsId);
    public function createComment(Request $request, $newsId);
}
