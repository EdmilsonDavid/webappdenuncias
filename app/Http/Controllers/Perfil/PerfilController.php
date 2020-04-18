<?php

namespace App\Http\Controllers\Perfil;

use App\Http\Controllers\Controller;
use App\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Psy\Util\Json;
use Illuminate\Support\Facades\Storage;

class PerfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index(){

        return view('perfil.teste');
    }



    public function store(Request $request){

        $name = time().'.' . explode('/', explode(':', substr($request->img_data, 0, strpos($request->img_data, ';')))[1])[1];
        Image::make($request->img_data)->save(public_path('perfil_').$name);

        $user=User::findOrFail(Auth::user()->id);
        $user->perfil='perfil_'.$name;
        $user->save();
        return Response()->json(['success'=>'Perfil actualizado com sucesso!']);
    }
}
