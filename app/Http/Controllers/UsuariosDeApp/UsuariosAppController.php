<?php

namespace App\Http\Controllers\UsuariosDeApp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuariosAppController extends Controller
{
    public function index(){

        return view('usuariosApp.tabelausuariosappuem');
    }
}
