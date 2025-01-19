<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Post;
use Illuminate\Http\Request;

class ImageContentController extends Controller
{
    public function store(){
        $post = new News();
        $post->id = 0;
        $post->exists = true;
        $image = $post->addMediaFromRequest(key:'upload')->toMediaCollection("images", "ckpath");
        return response()->json([
            'url' => $image->getUrl()
        ]);

    }
}
