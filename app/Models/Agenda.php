<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Agenda extends Model implements HasMedia
{
    use HasFactory, Sluggable, InteractsWithMedia;

    protected $fillable = [
        'title',
        'slug',
        'waktu_mulai',
        'waktu_selesai',
        'tempat',
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
    public function categories()
    {
        return $this->belongsTo(AgendaCategory::class, 'cat_id','id');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }
}
