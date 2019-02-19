<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// antiga rota da pagina inicial
/*Route::get('/', function () {
    return view('welcome');
});*/

// todos os contrller passam por esse grupo, para que somente quen esteja logado tenha acesso 
$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix'=> 'admin'], function(){
    
    $this->get('historic','BalanceController@historic')->name('admin.historic');
    $this->post('balance/deposit','BalanceController@depositStore')->name('deposit.store');
    $this->get('balance/deposit','BalanceController@deposit')->name('balance.deposit');
    $this->get('balance','BalanceController@index')->name('admin.balance.index');

    $this->get('/','AdminController@index')->name('admin.home');
    $this->get('lotacao','lotacaoController@index')->name('admin.consulta.lotacao');
    $this->get('cardapio','CardapioController@index')->name('admin.consulta.cardapio');
    $this->get('addcardapio','AddCardapioController@index')->name('admin.cadastro.addcardapio');

    //Route::get('/painel','Admin\PainelController@index');add por tiago
    
    });
    
     //$this->get('Cadastro','CadastroController@index')->name('admin.Cadastro.cadindex');

    //$this->group(['middleware' => ['auth.admin'], 'namespace' => 'Admin', 'prefix'=> 'admin'], function(){//add por @tiago pra controlar acesso do administrador
    //$this->get('Cadastro','CadastroController@index')->name('admin.Cadastro.cadindex');
    //});// add por @tiago para ser rota autenticada de cadastro
//});

//$this->group(['middleware' => ['auth.admin'], 'namespace' => 'Admin', /*'prefix'=> 'admin'*/], function(){//add por @tiago pra controlar acesso do administrador
    //$this->get('Cadastro','CadastroController@index')->name('admin.Cadastro.cadindex');
    //});// add por @tiago para ser rota autenticada de cadastro



$this->get('/', 'site\SiteController@index')->name('home');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
