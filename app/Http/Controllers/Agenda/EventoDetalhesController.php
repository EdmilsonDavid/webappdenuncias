<?php

namespace App\Http\Controllers\Agenda;

use App\Agenda;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventoDetalhesController extends Controller
{
    //
    public function index(){
        return  view('agenda.calendariotabeladetalhe',compact('eventos',$eventos=Agenda::all()));
    }
}
