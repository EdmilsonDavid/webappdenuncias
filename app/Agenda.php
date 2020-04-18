<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class Agenda extends Model
{
    //

    protected $fillable=['title','start','end','color','description'];
    public function getStartAttribute($value)
    {
        $dateStart = Carbon::createFromFormat('Y-m-d H:i:s',$value)->format('Y-m-d');
        $timeStart = Carbon::createFromFormat('Y-m-d H:i:s',$value)->format('H:i:s');

    return $this->attributes['start']=($timeStart=='00:00:00'? $dateStart:$value);
    }



    public function getEndAttribute($value)
    {
        $dateEnd = Carbon::createFromFormat('Y-m-d H:i:s',$value)->format('Y-m-d');
        $timeEnd= Carbon::createFromFormat('Y-m-d H:i:s',$value)->format('H:i:s');

        return $this->attributes['end']=($timeEnd=='00:00:00' ? $dateEnd:$value);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
