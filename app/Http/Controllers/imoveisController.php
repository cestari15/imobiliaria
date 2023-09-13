<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class imoveisController extends Controller
{
    public function imoveis(){
        return view('imoveis');
    }

    public function imoveis2(){
        return view('imoveis2');
    }

    public function imoveis3(){
        return view('imoveis3');
    }

    public function casat(){
        return view('casat');
    }

}
