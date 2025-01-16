<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Pengumuman extends Model implements HasMedia
{
    use HasFactory, Sluggable, InteractsWithMedia;
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = [
        'title',
        'body',
        'slug',
        'description',
        'views',
        'keyword',
        'status',
        'user_id',
        'cat_id',
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['title', 'id']
            ]
        ];
    }
    public function pengumumanCategories()
    {
        return $this->hasMany(PengumumanCategory::class, 'cat_id','id');
    }
    public function users(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
