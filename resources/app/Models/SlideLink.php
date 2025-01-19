<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SlideLink extends Model
{
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = [
        'title',
        'link'
    ];
}
