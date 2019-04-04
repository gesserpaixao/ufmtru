<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Avaliar;



class AvaliarController extends Controller
{
    public function index()
    {
        return view('admin.avaliar.avaliar');
    }
    

    public function store(Request $request)
{
    // Insere uma nova categoria, de acordo com os dados informados pelo usuário
   // $insert = $avaliar->create($request->all());
   
    $insert = Avaliar::create([
    'questao_01' => request('questao_01'),
    'questao_02' => request('questao_02'),
    'questao_03' => request('questao_03'),
    'questao_04' => request('questao_04'),
    'questao_05' => request('questao_05'),
    'date'           => date('ymd'),
    'user_id' => auth()->id()
    
  ]);
  
 
    // Verifica se inseriu com sucesso
    // Redireciona para a listagem das categorias
    // Passa uma session flash success (sessão temporária)
    if ($insert)
        return redirect()
                    ->route('admin.avaliar')
                    ->with('success', 'Questionario enviado com sucesso!');
 
    // Redireciona de volta com uma mensagem de erro
    return redirect()
                ->back()
                ->with('error', 'Falha ao enviar');
}



   
}
