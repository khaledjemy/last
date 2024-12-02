<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photoreply extends Model
{
    //
    protected $fillable =   ['comment_id','user_id','userreply_id','reply'];
    function photocomment()
    {
       return $this->belongsTo(Photocommente::class);
    }
    function comment()
    {
       return $this->belongsTo(Commente::class);
    }
    function userreply()
    {
       return $this->belongsTo(User::class,'user_id');
    }
}
