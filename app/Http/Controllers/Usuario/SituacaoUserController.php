<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use App\User;
use http\Env\Response;
use Illuminate\Http\Request;

class SituacaoUserController extends Controller
{
    public function update(Request $request){

if(($request->situacao)==[1]){
    $situacao=1;
}else{ $situacao=0;}
         for($i=0; $i<(count($request->id)); $i++){
             $user=User::find(($request->id)[$i]);
             $user->situacao=$situacao;
            $user->save();
         }



        return Response()->json(($request->situacao));
    }
}
