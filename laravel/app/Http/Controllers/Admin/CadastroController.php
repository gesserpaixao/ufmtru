<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CadastroController extends Controller
{
    public function index()
    {
        return view('admin.Cadastro.cadindex');
    }
}


//criado e add por @tiago, para ser o controller de cadastro.