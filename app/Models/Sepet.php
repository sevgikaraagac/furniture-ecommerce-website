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

//    public function users()
//    {
//        return $this->belongsTo(Users::class, 'users_id');
//    }
//
//    public function products()
//    {
//        return $this->belongsTo('App\Models\SubMenus', 'sub_id');
//    }


}
