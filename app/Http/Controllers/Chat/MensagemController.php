<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Mensagem;


class MensagemController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


  public function index(){
      $mensagensusers=DB::table('mensagems')
          ->join('vitimas', 'vitimas.id', '=', 'mensagems.vitima_id')
          ->select(DB::raw('count(mensagems.vitima_id) as quantidade, vitimas.nome, vitimas.id'))
          ->groupBy('vitimas.nome','vitimas.id')
          ->get();;
      return view('chat.chat',compact('mensagensusers'));
  }


  public function conversa(Request $request){
      $users =$users = DB::table('mensagems')->select('msg','user_id','vitima_id')->where('vitima_id', '=', $request->id)->get();;

      return Response()->json($users);
  }






  public function store(Request $request){
      $mensagem=new Mensagem();
      $mensagem->msg=$request->mensagem;
      $mensagem->estado=0;
      $mensagem->vitima_id=$request->idvitima;
      $mensagem->user_id=Auth::user()->id;
      $mensagem->save();
      return Response()->json($mensagem);

  }







}
