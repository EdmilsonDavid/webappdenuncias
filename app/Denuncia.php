<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Denuncia extends Model
{
    //
    public function vitima(){
        return $this->belongsTo(Vitima::class);
    }
}
