<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Images extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable =[
        'image',
        'thumbnail',
        'news_id',
        'article_id',
        'user_id',
        'party_id',
        'member_id'
    ];

    public function news()
    {
        return $this->belongsTo(News::class, 'news_id','id');
    }

    public function articles()
    {
        return $this->belongsTo(Article::class, 'article_id','id');
    }

    public function members(){
        return $this->belongsTo(Member::class, 'member_id','id');
    }

    public function parties(){
        return $this->belongsTo(Party::class, 'party_id','id');
    }

    public function users(){
        return $this->belongsTo(User::class, 'user_id','id');
    }

}
