<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Cart extends Model
{
    protected $table='cart';
    public $timestamps=true;
    protected $fillable=[
        'user_id',
        'sub_menu_id',
        'name',
        'price',
        'qty',
    ];
}

