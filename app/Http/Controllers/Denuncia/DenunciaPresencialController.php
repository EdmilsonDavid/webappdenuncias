<?php

namespace App\Http\Controllers\Denuncia;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DenunciaPresencialController extends Controller
{
    public function index(){
        return view('denuncia.dpresencias');
    }
}
