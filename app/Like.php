<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
   Public function user()
  {
    return $this->belongsTo('App\User');
  }
   Public function post()
  {
    return $this->belongsTo('App\Post');
  }
}
