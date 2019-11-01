<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Urunler extends Model
{
    protected $table='urun';
    public $timestamps=true;
    protected $fillable=[
        'img_url',
        'title',
        'cat_id',
        'price',
        'content',
    ];
    public function category()
    {
        return $this->belongsTo(Categories::class, 'cat_id');
    }


}
