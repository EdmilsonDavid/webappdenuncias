<?php

namespace App\Http\Controllers\Denuncia;

use App\Denuncia;
use App\DPresencia;
use App\Http\Controllers\Controller;
use App\Vitima;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DenunciaChatController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){

       $word= array_merge(range('a','z'),range('A','Z'));
       shuffle($word);
        substr(implode($word),0,4).'-'.date('Ymd');

        $vitimas=Vitima::all();
        $denuncias=Denuncia::all();
        return view('denuncia.dchat',['vitimas'=>$vitimas,'denuncias'=>$denuncias]);
    }

    public function store(Request $request)
    {
        $denuncias=new Denuncia();
        $denuncias->nome=$request->nome;
        $denuncias->descricao=$request->descricao;
        $denuncias->local=$request->local;
        $denuncias->vitima_id=$request->vitimachat;
        $denuncias->denuciado=$request->denuciado;
        $denuncias->tipodeassedio=$request->tipodeassedio;
        $denuncias->user_id=Auth::user()->id;
        $denuncias->save();
        return Response()->json(true);
    }



}
