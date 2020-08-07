<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sepet extends Model
{
    protected $table='sepet';
    protected $guarded=[];
    protected $fillable=[

//        'users_id',
        'sub_menu_id',

    ];
}
