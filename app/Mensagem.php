<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
  public function user(){
      return $this->belongsTo(Vitima::class);
  }
}
