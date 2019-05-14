<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testeController extends Controller
{
    public function index(){
        return view('primeiraView.index');
    }

    public function primeiraView(){
        return view('primeiraView');
    }

    public function segundaView(){
        return view('segundaView');
    }
}

