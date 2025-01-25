<?php

namespace App\Services\Impl;


use App\Models\Category;
use App\Models\Images;
use App\Models\News;
use App\Models\Temporary;
use App\Services\NewsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Spatie\Image\Image;

class NewsServiceImpl implements NewsService
{

    private function decrypt($payload)
    {
        return Crypt::decrypt($payload);
    }

    private function makeThumbnail($imagePath, $thumbPath)
    {
        $image = Image::load($imagePath);
        $image->resize(500, 300);
        $image->save($thumbPath);
    }
    private function copyTemporaryFile($tmpFile, $fileId)
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
            $baner = Images::where('news_id', $fileId)->get();
            if ($baner->isNotEmpty()) {
                foreach ($baner as $item) {
                    Storage::delete($item->image);
                    Storage::delete($item->thumbnail);
                    $item->delete();
                }
            }
            $this->makeThumbnail($pathData, storage_path('app/public/' . $thumbnailPath));
            Images::create([
                'news_id' => $fileId,
                'image' => $destinationPath,
                'thumbnail' => $thumbnailPath,
            ]);
            Storage::delete($sourcePath);
            $item->delete();
        }
    }
    public function getNews(){
        return News::with('images')->latest()->paginate(10);
    }
    public function getNewsByUser()
    {
        $user = Auth::user()->id;
        return News::with('images')->where('user_id', $user)->latest()->paginate(6);
    }
    public function getNewsById($id)
    {
        $id = $this->decrypt($id);
        $user = Auth::user()->id;
        return News::with('images')->where('user_id', $user)->find($id);
    }

    public function getNewsDetail($slug){

      return News::with(['images','categories'])->where('slug', $slug)->first();


    }



    public function getCategory()
    {
        return Category::latest()->get();
    }
    private function validation ($request){
       return   $request->validate([
              'judul' => 'required|string|max:200',
              'konten' => 'required|string',
              'kategori' => 'required|numeric',
              'status' => 'required|numeric',
              'description' => 'nullable|string|max:160',
              'keyword' => 'nullable|string|max:160',
              'headline' => 'numeric'
          ]);
      }


    public function create(Request $request)
    {
        $user = Auth::user()->id;
        $sessionId = Session::getId();
        $temporaryFiles = Temporary::where('session_id', $sessionId)->get();
        $validated = $this->validation($request);
        $news = News::create([
            'title' => $validated['judul'],
            'body' => $validated['konten'],
            'cat_id' => $validated['kategori'],
            'status' => $validated['status'],
            'description' => $validated['description'],
            'keyword' => $validated['keyword'],
            'user_id' => $user,
            'headline' => $validated['headline'],
        ]);
        $this->copyTemporaryFile($temporaryFiles, $news->id);
    }

    public function update(Request $request, $id)
    {
        $id = $this->decrypt($id);
        $sessionId = Session::getId();
        $temporaryFiles = Temporary::where('session_id', $sessionId)->get();
        $user = Auth::user()->id;
        $validated = $this->validation($request);
        $news = News::findOrFail($id);
        $news->update([
            'title' => $validated['judul'],
            'body' => $validated['konten'],
            'cat_id' => $validated['kategori'],
            'status' => $validated['status'],
            'description' => $validated['description'],
            'keyword' => $validated['keyword'],
            'headline' => $validated['headline'],
            'user_id' => $user,
        ]);
        $this->copyTemporaryFile($temporaryFiles, $news->id);
    }
    public function delete($id)
    {
        $user = Auth::user()->id;
        $data = News::where('user_id', $user)->find($id);

        if ($data) {
            $baners = Images::where('news_id', $data->id)->get();
            foreach ($baners as $baner) {
                if ($baner->baner) {
                    Storage::delete($baner->image);
                }
                if ($baner->thumbnail) {
                    Storage::delete($baner->thumbnail);
                }
                $baner->delete();
            }

            $data->delete();
        }
    }

    public function searchNews(Request $request)
    {
        $search = $request->input('search');

        $news = News::query();

        if ($search) {
            $news->where('title', 'LIKE', '%' . $search . '%')
                ->with('images')
                ->orWhereHas('categories', function ($query) use ($search) {
                    $query->where('nama', 'LIKE', '%' . $search . '%');
                });
        }

        return $news->paginate(10);
    }

}
