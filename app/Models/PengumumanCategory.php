<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengumumanCategory extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    protected $fillable = [
        'nama'
    ];

    public function pengumumans()
    {
        return $this->hasMany(Pengumuman::class, 'cat_id','id');
    }

}
