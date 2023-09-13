<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class imobiliariaController extends Controller
{
    public function home(){
        return view('home');
    }

    public function template(){
        return view('template');
    }

    public function empresa(){
        return view('empresa');
    }
}
