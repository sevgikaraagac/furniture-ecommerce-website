<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table='category';
    public $timestamps=true;
    protected $fillable=[
        'img_url',
        'title',
        'content',
    ];
    public function products()
    {
        return $this->hasMany(Urunler::class, 'cat_id');
    }
}
