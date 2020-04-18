<?php

namespace App\Http\Controllers\perfil;

use App\Http\Controllers\Controller;
use http\Env\Response;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator as ValidatorAlias;

class perfilPasswordController extends Controller
{
    public function update(Request $request)
    {
        $messages = [

            'password.min'=>'A :attribute deve ter no minimo 8 caracters, para aumentar a segueranca de dados do sistema.',


        ];
        $validarPassword= ValidatorAlias::make($request->all(),[

            'password' => 'required|min:8',

        ],$messages);


        if ($validarPassword->fails()) {
            return response()->json(['error'=>$validarPassword->errors()->all()]);


        }else{
            if ($request->has(['password'])) {

                $user=User::findOrFail(Auth::user()->id);
                $user->password=Hash::make($request->password);
                $user->save();
                return response()->json(['success'=>'Password actualizado com sucesso!']);
            }
        }



    }
}
