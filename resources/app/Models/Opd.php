<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Opd extends Model
{
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    protected $fillable = [
        'kode_opd',
        'nama_opd'
    ];
    public function users(){
        return $this->hasOne(User::class, 'opd_id','id');
    }
}
