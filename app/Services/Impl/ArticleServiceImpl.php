<?php

namespace App\Services\Impl;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Baner;
use App\Models\Images;
use App\Models\Temporary;
use App\Services\ArticleService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Spatie\Image\Image;
class ArticleServiceImpl implements ArticleService
{

    private function validation($request){
      return  $request->validate([
            'judul' => 'required|string|max:120',
            'konten' => 'required|string',
            'kategori' => 'required|numeric',
            'status' => 'required|numeric',
            'description' => 'nullable|string|max:160',
            'keyword' => 'nullable|string|max:160',
            'oleh' => 'required|string|max:120',
        ]);
    }
    private function decrypt($payload){
        return Crypt::decrypt($payload);
    }
    private function makeThumbnail($imagePath, $thumbPath)
    {
        $image = Image::load($imagePath);
        $image->resize(500, 300);
        $image->save($thumbPath);
    }
    public function copyTemporaryFile($tmpFile, $fileId)
    {
        foreach ($tmpFile as $item) {
            $sourcePath = $item->file;
            $destinationPath = 'images/baner/' . basename($sourcePath);

            Storage::copy($sourcePath, $destinationPath);

            $filename = basename($destinationPath);
            $thumbDirectory = 'images/thumbs/';
            $thumbnailPath = $thumbDirectory . 'thumb_' . $filename;

            $pathData = storage_path('app/public/' . $destinationPath);

            if (!Storage::exists($thumbDirectory)) {
                Storage::makeDirectory($thumbDirectory);
            }
            $baner = Images::where('article_id', $fileId)->get();
            if($baner->isNotEmpty()){
                foreach ($baner as $item) {
                    Storage::delete($item->image);
                    Storage::delete($item->thumbnail);
                    $item->delete();
                }
            }
            $this->makeThumbnail($pathData, storage_path('app/public/' . $thumbnailPath));
            Images::create([
                'article_id' => $fileId,
                'image' => $destinationPath,
                'thumbnail' => $thumbnailPath,
            ]);

            Storage::delete($sourcePath);
            $item->delete();
        }
    }

    private function user(){
        $user = Auth::user()->id;
        if(!$user){
            return response()->json(['error' => 'User Not Found'], 401);
        } else{
            return $user;
        }
    }

    public function getArticle()
    {
        $user = $this->user();
        return Article::where('user_id', $user)->latest()->paginate(6);
    }
    public function create(Request $request)
    {
        $user = $this->user();
        $sessionId = Session::getId();
        $temporaryFiles = Temporary::where('session_id', $sessionId)->get();

        $validated = $this->validation($request);
        $data = Article::create([
            'title' => $validated['judul'],
            'body' => $validated['konten'],
            'cat_id' => $validated['kategori'],
            'status' => $validated['status'],
            'description' => $validated['description'],
            'keyword' => $validated['keyword'],
            'author' => $validated ['oleh'],
            'user_id' => $user
        ]);
        $articleId = $data->id;
        $this->copyTemporaryFile($temporaryFiles, $articleId);
    }

    public function getCatgoryArticle(){
        return ArticleCategory::latest()->get();
    }

    public function getArticleById($id){
        $id = $this->decrypt($id);
        $article =  Article::find($id);
        if(!$article){
            abort(404, 'Article Tidak Ditemukan');
        }
        return $article;
    }

    public function update(Request $request, $id){
        $user = $this->user();
        $sessionId = Session::getId();
        $temporaryFiles = Temporary::where('session_id', $sessionId)->get();
        $validated = $this->validation($request) ;
        $article = Article::find($id);
        $article->update([
            'title' => $validated['judul'],
            'body' => $validated['konten'],
            'cat_id' => $validated['kategori'],
            'status' => $validated['status'],
            'description' => $validated['description'],
            'keyword' => $validated['keyword'],
            'user_id' => $user
        ]);
        $this->copyTemporaryFile($temporaryFiles, encrypt($article->id));
    }

    public function delete($id){
        $user = $this->user();
        $article = Article::where('user_id', $user)->find($id);
        if($article){
          $baners =  Images::where('article_id', $article->id)->get();
            foreach($baners as $item ){
                if($item->baner){
                    Storage::delete($item->baner);
                }
                if ($item->thumbnail) {
                    Storage::delete($item->thumbnail);
                }
            }
            $article->delete();
        }
    }

}
