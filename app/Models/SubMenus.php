<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class  SubMenus extends Model
{
    protected $table='sub_menu';
    public $timestamps='true';
    protected $fillable=[
        'menu_id',
        'price',
        'title',
        'img_url',
        'content',
        'order',
    ];


public function products()
{
    return $this->hasMany('App\Models\Sepet' , 'sub_menu_id', 'id');
}


public function cart()
{
    return $this->hasMany('App\Models\Cart' , 'sub_menu_id', 'id');
}
};
