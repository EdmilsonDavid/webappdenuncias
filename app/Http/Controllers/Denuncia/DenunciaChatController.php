<?php

namespace App\Http\Controllers\Denuncia;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DenunciaChatController extends Controller
{
    //
    public function index(){

       $word= array_merge(range('a','z'),range('A','Z'));
       shuffle($word);
        substr(implode($word),0,4).'-'.date('Ymd');
        return view('denuncia.dchat');
    }
}
