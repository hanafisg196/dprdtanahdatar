<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class Member extends Model
{
    use HasTags, Sluggable;
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    protected $fillable = [
        'nama',
        'lahir',
        'agama',
        'dapil',
        'party_id',
        'status'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['nama', 'id']
            ]
        ];
    }

    public function parties()
    {
        return $this->belongsTo(Party::class, 'party_id','id');
    }

    public function images(){
        return $this->hasOne(Images::class, 'member_id','id');
    }
}
