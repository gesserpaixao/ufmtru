<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LotacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gera = rand(10,250);
        if ($gera > 100 && $gera < 200){
            $cor = 'yellow';
        }
        if ($gera < 100){
            $cor = 'green';
        }
        
        if ($gera > 200){
            $cor = 'red'; 
        }

        return view('admin.consulta.lotacao')->with('gera', $gera)->with('cor', $cor);
    }

    
}
