<?php

namespace App\Http\Controllers\loginAPI;

use App\Http\Controllers\Controller;
use App\Mensagem;
use App\Vitima;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Support\Facades\Validator as ValidatorAlias;

class loginapicontroller extends Controller
{
    public function login(Request $request){

     $vitima= DB::table('vitimas')->where('email', $request->email)->first();

  /*   if($vitima && Hash::check($request->password, $request->email)){
         return Response()->json($vitima);
     }else{
         return Response()->json(['message' => 'Nenhumdado encontrado'],404);
     }*/
        return Response()->json(['success'=>true,'result'=>$vitima]);
    }

    public function registar(Request $request){

        $messages = [
            'email.unique'=>'Existe um utilizador com este email',
            'email'=>'Email Invalido',
        ];
        $validarDadosUsuario= ValidatorAlias::make($request->all(),[
            'email' => 'required|email|unique:users|max:255|string',
        ],$messages);
        if ($validarDadosUsuario->fails()) {
            return response()->json(['success'=>false,'msg'=>$validarDadosUsuario->errors()->all()]);

        }else{

            $vitima=new Vitima();
       $vitima->nome=$request->nome;
       $vitima->email=$request->email;
       $vitima->password=$request->password;
       $vitima->save();

       return Response()->json(['success'=>true, 'msg'=>'registado com sucesso!']);

        }
    }

    public function chat(Request $request){
        $mensagens=new Mensagem();
        $mensagens->msg=$request->msg;
        $mensagens->estado=0;
        $mensagens->user_id=1;
        $mensagens->vitima_id=6;
        $mensagens->enviadopor=0;
        $mensagens->save();
        return Response()->json(['success'=>true,'result'=>$mensagens]);
    }
}
