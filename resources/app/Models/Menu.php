<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    protected $fillable =[
        'name',
        'type',
        'link'
    ];

    public function subMenus(){
        return $this->hasMany(SubMenu::class, 'menu_id', 'id');
    }
}
