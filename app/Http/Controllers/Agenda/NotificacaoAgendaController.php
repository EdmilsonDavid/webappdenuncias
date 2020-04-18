<?php

namespace App\Http\Controllers\Agenda;

use App\Http\Controllers\Controller;
use http\Env\Response;
use Illuminate\Http\Request;
use Psy\Util\Json;
use DB;

class NotificacaoAgendaController extends Controller
{
    //
    public function notificacao(){
        $haumareuniao=0;

        $datahora=date('Y-m-d');
        $datainicionotificacao = DB::table('agendas')
            ->whereDate('start', $datahora)->count();
        $datahora=date('Y-m-d',strtotime('+0 days'));
        $datafimnotificacao = DB::table('agendas')
            ->whereDate('end', $datahora)->count();
        $datahora=date('Y-m-d',strtotime('+1 days'));
        $datafimmeionotificacao = DB::table('agendas')
            ->whereDate('end', $datahora)->count();



      if(($datafimnotificacao!=0)||($datainicionotificacao!=0)||($datafimmeionotificacao!=0)){
            $haumareuniao=2;
        }

        return Response()->json($haumareuniao);
    }
}
