<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Balance;
use Illuminate\Support\Facades\Input;
use Mockery\Matcher\AndAnyOtherArgs;

class RelatorioController extends Controller
{
    public function index()
    {
        return view('admin.relatorio.relatorio');
    }

    public function relatorio(Request $request)
    {
        $data_inicio = $request->input('data_inicio');
         
        $data_final = $request->input('data_final');

        if ($data_inicio <> Null){
        $user =  DB::table('historics')
        ->whereBetween('date',[$data_inicio, $data_final])
        ->Where('type','I')
        
        ->get();
        
        $total_valor = $user->sum('amount');

        return view('admin.relatorio.relatorio')->with('user', $user)->with('total_valor', $total_valor);
        }else{
            return view('admin.relatorio.relatorio')->with('error'); 
        }
    }
}
