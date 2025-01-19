<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class News extends Model implements HasMedia
{
    use HasFactory, Sluggable, InteractsWithMedia;
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    protected $fillable = [
        'title',
        'body',
        'slug',
        'status',
        'description',
        'headline',
        'views',
        'keyword',
        'user_id',
        'cat_id',
        'created_at'
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['title', 'id']
            ]
        ];
    }
    public function images(){
        return $this->hasOne(Images::class, 'news_id','id');
    }


    public function categories()
    {
        return $this->belongsTo(Category::class, 'cat_id','id');
    }

    public function users(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'news_id','id');
    }
}
