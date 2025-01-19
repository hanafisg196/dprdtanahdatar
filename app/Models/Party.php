<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    protected $fillable = [
        'name',
        'initial'
    ];

    public function members()
    {
        return $this->hasMany(Member::class, 'party_id','id');
    }

    public function images(){
        return $this->hasOne(Images::class, 'party_id','id');
    }
}
