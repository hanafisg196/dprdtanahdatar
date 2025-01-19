<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryLink extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = [
        'name',
    ];
    public function links(){
        return $this->hasMany(Link::class, 'cat_id','id');
    }

}
