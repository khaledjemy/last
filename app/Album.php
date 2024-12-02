<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    //
    protected    $fillable   =   ['name','user_id'];

    public function photo()
    {
        return $this->hasMany(Photo::class);

    }

}
