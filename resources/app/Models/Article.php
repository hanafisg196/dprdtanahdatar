<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Article extends Model implements HasMedia
{
    use HasFactory, Sluggable, InteractsWithMedia;
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = [
        'title',
        'body',
        'slug',
        'description',
        'keyword',
        'author',
        'views',
        'status',
        'user_id',
        'cat_id'
       ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['title', 'id']
            ]
        ];
    }

    public function images()
    {
        return $this->hasOne(Images::class, 'article_id','id');
    }
    public function users(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function articleCategories()
    {
        return $this->belongsTo(ArticleCategory::class, 'cat_id','id');
    }
}
