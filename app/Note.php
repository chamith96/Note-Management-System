<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function user(){
      return $this->belongTo('App\User');
    }
}
