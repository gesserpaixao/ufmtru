
@extends('adminlte::page')

@section('title', 'Cadastro')

@section('content_header')
<h1>Cadastro de Cardápio</h1>

    <ol class="breadcrumb">
        <li><a href="">Home</a><li>
        <li><a href="">Cardapio</a><li>
        

    </ol>
@stop

@section('content')

<div class="box">
        <div class="box-header">
            <h3></h3>
        </div>   
        <div class="box-body">
           @include('admin.includes.alerts')
                <form method="POST" action="{{route('deposit.store')}}">
                    {!! csrf_field()!!}

                    <div class="form-group">
                        <input type="text" name="value" placeholder="Digite o nome" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Tornar Administrador<button>
                    </div>
                </form>
        </div>  
    </div>
@stop

<!-- Pagina criada e adiciona por @tiago, para ser tela principal da parte de cadastro do projeto.>