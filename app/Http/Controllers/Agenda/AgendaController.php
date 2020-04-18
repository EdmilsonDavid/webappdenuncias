<?php

namespace App\Http\Controllers\Agenda;

use App\FastEvent;
use App\Http\Controllers\Controller;
use http\Env\Response;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Http\Request;
use App\Agenda;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator as ValidatorAlias;

class AgendaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $fastEvents=FastEvent::all();
        return view('agenda.index',compact('fastEvents'));
    }

    public function lerEventos(){
        $eventos =Agenda::all();

      return  Response()->json($eventos);
    }

    public function update(Request $request)
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
            'start'=>'date_format:Y-m-d H:i:s|before:end',
            'end'=>'date_format:Y-m-d H:i:s|after:start',


        ],$messages);
        if ($validarDadosUsuario->fails()) {
            return response()->json(['error'=>$validarDadosUsuario->errors()->all()]);


        }else{
       $agenda =Agenda::where('id',$request->id)->first();
       if($agenda->user_id==Auth::user()->id){
       $agenda->fill($request->all());
        $agenda->user_id=Auth::user()->id;
        $agenda->save();
        return Response()->json(true);}else{
           return Response()->json(false);
       }}

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
            'start'=>'date_format:Y-m-d H:i:s|before:end',
            'end'=>'date_format:Y-m-d H:i:s|after:start',


        ],$messages);
        if ($validarDadosUsuario->fails()) {
            return response()->json(['error'=>$validarDadosUsuario->errors()->all()]);


        }else{
        $agenda = new Agenda();
        $agenda->title = $request->title;
        $agenda->color = $request->color;
        $agenda->start = $request->start;
        $agenda->end = $request->end;
        $agenda->description = $request->description;
        $agenda->user_id = Auth::user()->id;
        $agenda->save();
        return Response()->json(true);
    }
    }

    public function destroy(Request $request)
    {
        Agenda::where('id',$request->id)->delete();
        return Response()->json(true);
    }
}
