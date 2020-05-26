<?php

namespace App\Http\Controllers\Denuncia;

use App\DPresencia;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DenunciaPresencialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $dpresencias=DPresencia::all();
        return view('denuncia.dpresencias',['dpresencias'=>$dpresencias]);
    }

    public function store(Request $request)
    {
       $dpresencias=new DPresencia();
       $dpresencias->nome=$request->nome;
       $dpresencias->descricao=$request->descricao;
       $dpresencias->telefone=$request->telefone;
       $dpresencias->local=$request->local;
       $dpresencias->email=$request->email;
        $dpresencias->denuciado=$request->denuciado;
       $dpresencias->tipodeassedio=$request->tipodeassedio;
       $dpresencias->user_id=Auth::user()->id;
       $dpresencias->save();
       return Response()->json(true);
    }


    public function situacao(Request $request){
        $dpresencias=DPresencia:: findOrFail($request->id);
        $dpresencias->estado=$request->situacao;
        $dpresencias->save();
        return Response()->json(true);

    }
}
