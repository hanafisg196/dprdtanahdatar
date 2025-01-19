<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    protected $fillable = [
        'title',
        'link',
        'cat_id'
    ];

    public function categories(){
        return $this->belongsTo(CategoryLink::class, 'cat_id','id');
    }


}
