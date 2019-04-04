@extends('adminlte::page')

@section('title', 'Saldo')

@section('content_header')
    <h1>Saldo</h1>

    <ol class="breadcrumb">
        <li><a href="">Home</a><li>
        <li><a href="">Saldo</a><li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <a href="{{route('balance.deposit')}}" class="btn btn-primary"> <i class="fa fa-cart-plus" aria-hidden="true"></i> Recarregar</a>
        </div>   
        <div class="box-body">
            <div class="small-box bg-green">
                @include('admin.includes.alerts')
            </div>
                <div class="small-box bg-green">
                        <div class="inner">
                          <h3>R${{number_format($amount, 2, ',','.')}}</h3>
            
                          <p></p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-cash"></i>
                        </div>
                        <a href="/admin/historic" class="small-box-footer">Histórico <i class="fa fa-arrow-circle-right"></i></a>
                      </div>
        </div>  
    </div>
    <p>Meu Saldo</p>
@stop