<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table='users';
    public $timestamps='true';
    protected $fillable=[
        'name',
        'sepet_id',
        'email',
        'email_verified_at',
        'password',
        'is_admin',

    ];
    public function products()
    {
        return $this->hasMany(Sepet::class, 'users_id');
    }
    public function cart()
    {
        return $this->hasMany(Cart::class, 'users_id');
    }

}
