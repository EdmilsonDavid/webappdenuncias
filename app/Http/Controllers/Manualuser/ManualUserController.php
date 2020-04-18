<?php

namespace App\Http\Controllers\Manualuser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManualUserController extends Controller
{
    //
    public function index(){
        return view('pdf.manualdeusuario');
    }
}
