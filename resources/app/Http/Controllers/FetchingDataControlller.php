<?php

namespace App\Http\Controllers;

use App\Models\Baner;
use App\Models\Images;
use App\Models\News;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Spatie\Image\Image;

class FetchingDataControlller extends Controller
{
    public function makeThumbnail($imagePath, $thumbPath)
    {
        $image = Image::load($imagePath);
        $image->resize(500, 300);
        $image->save($thumbPath);
    }

    public function fetchImage($postId,$url){
         $fileContents = file_get_contents($url);
         $fileName = basename($url);
         $pathImage = 'baner/images/' . $fileName;
         Storage::put($pathImage, $fileContents);
         $thumbDirectory = 'thumbs/' .'thumb_' . $fileName;
         $pathTarget = storage_path('app/public/' . $pathImage);
         $pathThumbnail = storage_path('app/public/' . $thumbDirectory);
         $this->makeThumbnail($pathTarget,$pathThumbnail);
         return Images::create([
            'news_id' => $postId,
            'baner' => $pathImage,
            'thumbnail' => $thumbDirectory,
         ]);

    }
    public function fetchData(){

     $endpoint =  "https://tanahdatar.go.id/services/api/berita?page=1";
     $response = Http::withQueryParameters([
        'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3',
        'page' => 1
    ])->get($endpoint);
    if($response->successful()){
        $data = $response->json();
        foreach ($data['data']['data'] as $item){
         $news =   News::create([
                'title' => $item['judul'],
                'body' =>  $item['isi'],
                'created_at' => $item['tanggal'],
                'user_id' => 1,
                'cat_id' => 1
           ]);
           Images::create([
            "baner" =>  'https://tanahdatar.go.id/fotos/'.$item['foto']['path'].'/'.$item['foto']['foto'],
            "thumbnail" =>  'https://tanahdatar.go.id/fotos/'.$item['foto']['path'].'/'.$item['foto']['foto'],
            "news_id" => $news->id
         ]);
         //  $this->fetchImage(
        //     $news->id,
        //     'https://tanahdatar.go.id/fotos/'.$item['foto']['path'].'/'.$item['foto']['foto']);
        // }
      }
      return response()->json('Fetch Data Success', 200);
    }
  }
}
