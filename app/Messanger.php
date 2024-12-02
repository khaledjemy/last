<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messanger extends Model
{
    //
    protected $fillable =   ['my_id','user_id','message','read'];

    public function user()
    {
        return $this->belongsTo(User::class,'my_id');
    }
}
