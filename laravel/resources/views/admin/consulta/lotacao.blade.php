@extends('adminlte::page')

@section('title', 'Lotação')

@section('content_header')
    <h1>Lotação</h1>

    <ol class="breadcrumb">
        <li><a href="">Home</a><li>
        <li><a href="">Lotação</a><li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            
        </div>   
        <div class="box-body">
         <div class="small-box bg-blue">
            <div class="inner">
              <h3>{{$gera = rand(0,300)}}</h3>

              <p>Pessoas no Momento</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
              
            </div>
            <a href="#" class="small-box-footer">
              Capacidade Maxima de 300 Pessoas<i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>             
        </div>  
    </div>
    <p></p>
@stop