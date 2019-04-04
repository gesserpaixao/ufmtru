@extends('adminlte::page')

@section('title', 'Nova Recarga')

@section('content_header')
<h1>Fazer Recarga</h1>

    <ol class="breadcrumb">
        <li><a href="">Home</a><li>
        <li><a href="">Saldo</a><li>
        <li><a href="">Recarga</a><li>

    </ol>
@stop

@section('content')
<div class="box">
        <div class="box-header">
            <h3>Insira o valor da recarga</h3>
        </div>   
        <div class="box-body">
           @include('admin.includes.alerts')
                <form method="POST" action="{{route('deposit.store')}}" >
                    {!! csrf_field()!!}

                    <div class="form-group">
                        <input type="text" name="value"  placeholder="Ex: 10.00" class="form-control">
                    </div>
                    <div class="form-group">
                        <!--<button type="submit" class="btn btn-success">Recarregar<button>-->
                                <input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/120x53-pagar.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
                    </div>
                </form>
                
        </div>  
    </div>

    <!--<form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
     NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO 
    <input type="hidden" name="code" value="7131C4703333AD5FF41C3F9618452A88" />
    <input type="hidden" name="iot" value="button" />
    <input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/120x53-pagar.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
    </form>
    <script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
     FINAL FORMULARIO BOTAO PAGSEGURO -->



@stop