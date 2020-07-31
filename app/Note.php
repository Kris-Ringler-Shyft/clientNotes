<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
