<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroUsuarioController extends Controller
{
    public function index(){


    }

    public function create(){
        return view('ingresarusu.register');
    }
}
