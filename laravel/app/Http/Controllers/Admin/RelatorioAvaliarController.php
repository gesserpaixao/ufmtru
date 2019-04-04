<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Balance;
use Illuminate\Support\Facades\Input;

class RelatorioAvaliarController extends Controller
{
    public function index()
    {
        return view('admin.relatorio.relatorio_avaliar');
    }

    public function relatorio(Request $request)
    {
        $data_inicio = $request->input('data_inicio');
         
        $data_final = $request->input('data_final');

        if ($data_inicio <> Null){
        $user =  DB::table('avaliars')
        ->whereBetween('date',[$data_inicio, $data_final])
        ->get();
        
        $total_valor = $user->count('user_id');

        return view('admin.relatorio.relatorio_avaliar')->with('user', $user)->with('total_valor', $total_valor);
        }else{
            return view('admin.relatorio.relatorio_avaliar')->with('error'); 
        }
    }
}