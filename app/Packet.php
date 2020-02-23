<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Packet extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->hasOne('App\User');
    }
}
