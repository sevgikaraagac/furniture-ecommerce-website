<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table='news';
    public $timestamps=true;

    protected $fillable=[
        'is_slider',
        'img_url',
         'title',
        'content',
    ];


}
