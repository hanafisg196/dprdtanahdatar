<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    protected $fillable =[
        'sub_name',
        'sub_link',
        'menu_id'
    ];

    public function menus(){
        return $this->belongsTo(Menu::class, 'menu_id', 'id');
    }
}
