<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Support\Facades\Validator as ValidatorAlias;
use function Sodium\add;

class userController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        $usuarios=User::all();



        $totalDeAdmin = DB::table('role_user')->where('role_id', 1)->count();
        $totalDeUserNormal = DB::table('role_user')->where('role_id','<>', 1)->count();



        return view('usuario.usuarios',compact('usuarios','totalDeUserNormal'),compact('totalDeAdmin'));
    }


    public function indextabela(){
        $usuarios=User::all();
        return view('usuario.tabelausuario',compact('usuarios'));
    }

    /**
     * @param Request $request
     */
    public function store(Request $request){
        $messages = [
            'required'    => 'O campo :attribute não está preenchido, é obrigatório que preenche! ',
            'telefone.max'=>'O numero de :attribute deve ter 9 digitos',
            'telefone.min'=>'O numero de :attribute deve ter 9 digitos',
            'email.unique'=>'Existe um utilizador com este email',

        ];
        $validarDadosUsuario= ValidatorAlias::make($request->all(),[
            'nome' => "required",
            'endereco' => 'required',
            'email' => 'required|email|unique:users|max:255|string',
            'telefone' => 'required|max:9|min:9',
            'situacao'=>'required',

        ],$messages);
        if ($validarDadosUsuario->fails()) {
            return response()->json(['error'=>$validarDadosUsuario->errors()->all()]);


        }else{
            if ($request->has(['nome', 'email','endereco','telefone','situacao'])) {
                $passord=rand(1111111,99999999);
                $user=new User();
                $user->name=$request->nome;
                $user->email=$request->email;
                $user->password=Hash::make($passord);
                $user->situacao=(int)($request->situacao);
                $user->morada=$request->endereco;
                $user->telefone=$request->telefone;
                $user->perfil="foto.png";
                $user->save();

                $details = [
                    'title' => 'Bem Vindo a nossa plataforma do CeCAGe',
                    'body' => 'Password: '.$passord.' Link da plataforma: http://127.0.0.1:8000/login'
                ];

                \Mail::to($request->email)->send(new SendMail($details));


                return response()->json($request->all());
            }
        }
    }



    public function destroy(Request $request){
       User::destroy($request->id);
        return response()->json($request->id);
    }



    public function update(Request $request){
        $user = User::find($request->id);
        $user->name = $request->nome;
        $user->email= $request->email;
        $user->situacao=$request->situacao;
        $user->bairro=$request->morada;
        $user->telefone=$request->telefone;
        $user->save();
        return $request->all();
    }



}
