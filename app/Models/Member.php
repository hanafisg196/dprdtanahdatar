<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    protected $fillable = [
        'nama',
        'lahir',
        'agama',
        'file',
        'dapil',
        'party_id'
    ];

    public function parties()
    {
        return $this->belongsTo(Party::class, 'party_id','id');
    }

    public function images(){
        return $this->hasOne(Images::class, 'member_id','id');
    }
}
