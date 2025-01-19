<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = [
        'nama'
    ];

    public function articles()
    {
        return $this->hasMany(Article::class, 'cat_id','id');
    }
}
