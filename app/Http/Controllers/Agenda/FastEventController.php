<?php

namespace App\Http\Controllers\Agenda;

use App\FastEvent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator as ValidatorAlias;

class FastEventController extends Controller
{

    public function update(Request $request)
    {
        $messages = [
            'title.required'=> 'O campo titulo não está preenchido, é obrigatório que preenche! ',
            'title.min'=>'O titulo deve ter no minimo 3 caracteres',
            'start.date_format'=>'Preencha a Hora inicial com valor valido',
            'start.before'=>'A hora inicial deve ser menor que a data final',
            'end.date_format'=>'Preencha a Hora inicial com valor valido',
            'end.after'=>'A hora final deve ser maior  que a data inicial',
        ];
        $validarDadosUsuario= ValidatorAlias::make($request->all(),[
            'title' => "required|min:3",
            'start'=>'date_format:H:i:s|before:end',
            'end'=>'date_format:H:i:s|after:start',


        ],$messages);
        if ($validarDadosUsuario->fails()) {
            return response()->json(['error'=>$validarDadosUsuario->errors()->all()]);


        }else{
            $fastEvent =FastEvent::where('id',$request->id)->first();
            $fastEvent->fill($request->all());
            $fastEvent->user_id=Auth::user()->id;
            $fastEvent->save();
            return Response()->json(true);}
    }





    public function destroy(Request $request)
    {
        FastEvent::where('id',$request->id)->delete();
        return Response()->json(true);
    }

    public function store(Request $request)
    {
        $messages = [
            'title.required'=> 'O campo titulo não está preenchido, é obrigatório que preenche! ',
            'title.min'=>'O titulo deve ter no minimo 3 caracteres',
            'start.date_format'=>'Preencha a data/Hora inicial com valor valido',
            'start.before'=>'A data/hora inicial deve ser menor que a data final',
            'end.date_format'=>'Preencha a data/Hora inicial com valor valido',
            'end.after'=>'A data/hora final deve ser maior  que a data inicial',
        ];
        $validarDadosUsuario= ValidatorAlias::make($request->all(),[
            'title' => "required|min:3",
            'start'=>'date_format:H:i:s|before:end',
            'end'=>'date_format:H:i:s|after:start',


        ],$messages);
        if ($validarDadosUsuario->fails()) {
            return response()->json(['error'=>$validarDadosUsuario->errors()->all()]);


        }else{
            $fastEvent = new FastEvent();
            $fastEvent->title = $request->title;
            $fastEvent->color = $request->color;
            $fastEvent->start = $request->start;
            $fastEvent->end = $request->end;
            $fastEvent->user_id = Auth::user()->id;
            $fastEvent->save();
            return Response()->json(true);
        }
    }
}
