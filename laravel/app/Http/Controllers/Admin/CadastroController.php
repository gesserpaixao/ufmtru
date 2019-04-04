<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\User;

use App\Http\Controllers\Admin;
use Illuminate\Database\Query\Expression;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;




class CadastroController extends Controller
{
   
    public $ide = 0;

    
    public function index()
    {
        return view('admin.cadastro.cadindex');
    }

    public function buscar(Request $request)
    {
        $p_nome = $request->input('p_nome');
        if(!is_null($p_nome)){
        $user = DB::table('users')
            ->where('name', 'like',  "%" . $p_nome)
            ->get();
        }else{
            return redirect()
            ->route('admin.cadastro.cadindex')
            ->with('error', 'Preencha o campo de busca'); 
        }
        if (!empty($user['0']->id)){

        $id = $user['0']->id;

         $ide = $id;
        //$user['0']->isadmin = '1';
        //return DB::update([
                
               // 'isadmin' => '1',
            //]); 
       // DB::table('users')->where('id',$id)->update(array('isadmin'=> '1',));       
           
    return 
                    view('admin.cadastro.cadindex')->with('user', $user)->with('id',$id);
                    

    }else{
        return redirect()
                    ->route('admin.cadastro.cadindex')
                    ->with('error', 'Registro não encontrado');
    }
        
        
        
    }

    
    public function atualiza(Request $request)
        {
            $id = $request->input('nome');

           // $user = DB::table('users')
            //->where('name', 'like',  "%" . $p_nome)
           //->get();
        
            
            //$id = $user['0']->id;
            if (!is_null($id)){

                DB::table('users')->where('id', $id)->update(array('isadmin'=> '1',));

                return redirect()
                    ->route('admin.cadastro.cadindex')
                    ->with('success', 'Adminstrador cadastrado com sucesso!');

            }else{

                return redirect()
                    ->route('admin.cadastro.cadindex')
                    ->with('error', 'Ocorreu um erro');

            }

    }

    

    public function excluir(Request $request)
        {
            $id = $request->input('nome');

           // $user = DB::table('users')
            //->where('name', 'like',  "%" . $p_nome)
           //->get();
        
           $userID = Auth::user()->id;
            //$id = $user['0']->id;
            if (!is_null($id) and ($id != $userID)) {

                
               
                    DB::table('users')->where('id', $id)->update(array('isadmin'=> '0',));

                    return redirect()
                        ->route('admin.cadastro.cadindex')
                        ->with('error', 'Adminstrador excluido com sucesso!');
                
            }else{

                return redirect()
                    ->route('admin.cadastro.cadindex')
                    ->with('error', 'Ocorreu um erro');

            }
        } 
      
}

//criado e add por @tiago, para ser o controller de cadastro.