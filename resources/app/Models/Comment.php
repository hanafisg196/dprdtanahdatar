<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    protected $fillable = [
        'name',
        'email',
        'website',
        'message',
        'news_id'
    ];

    public function news()
    {
        return $this->belongsTo(News::class, 'news_id','id');
    }
}
