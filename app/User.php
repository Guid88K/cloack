<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = ['first_name', 'last_name', 'phone', 'email', 'password'];
    protected $hidden = ['password', 'remember_token'];

    public function Role()
    {
        return $this->hasOne(RoleUser::class, 'user_id');
    }

    public function companies()
    {

        return $this->hasMany('App\Company');
    }

    public function packet()
    {

        return $this->belongsTo('App\Packet');
    }
}
