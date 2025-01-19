<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    protected $fillable = [
        'nama'
    ];

    public function news()
    {
        return $this->hasMany(News::class, 'cat_id','id');
    }
}
