<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MensagemMudarDeStatusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){


        $vitimas=DB::table('mensagems')
            ->join('vitimas', 'vitimas.id', '=', 'mensagems.vitima_id')
            ->select(DB::raw('count(mensagems.vitima_id) as quantidade, vitimas.nome, vitimas.id'))
            ->groupBy('vitimas.nome','vitimas.id')
            ->get();



           return view('chat.removeraAgumasMensagensdeChat',compact('vitimas'));
    }




    public function mensagemDeUsuario(Request $request){
        $users = DB::table('mensagems')->where('vitima_id', $request->id)->get();
        return Response()->json($users);
    }

    public function mensagens($id){


        $users = DB::table('mensagems')->where('vitima_id', $id)->get();

        $vitimas=DB::table('mensagems')
            ->join('vitimas', 'vitimas.id', '=', 'mensagems.vitima_id')
            ->select(DB::raw('count(mensagems.vitima_id) as quantidade, vitimas.nome, vitimas.id'))
            ->groupBy('vitimas.nome','vitimas.id')
            ->get();

        return view('chat.removeraAgumasMensagensdeChat',compact('users','vitimas'));
    }
}
