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
        @if($cor == 'green')
        <div class="box-body">
         <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$gera}}</h3>

              <p>Pessoas no Momento</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">
              Vazio !! Capacidade Maxima de 300 Pessoas<i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>             
        </div>  
        @endif
       
      @if($cor == 'yellow')
      <div class="box-body">
       <div class="small-box bg-yellow">
          <div class="inner">
            <h3>{{$gera}}</h3>

            <p>Pessoas no Momento</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">
            Moderado !! Capacidade Maxima de 300 Pessoas<i class="fa fa-arrow-circle-right"></i>
          </a>
      </div>             
      </div>  
      @endif
     
    @if($cor == 'red')
    <div class="box-body">
     <div class="small-box bg-red">
        <div class="inner">
          <h3>{{$gera}}</h3>

          <p>Pessoas no Momento</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
    
            <a href="#" class="small-box-footer">
              Lotado!! Capacidade Maxima de 300 Pessoas<i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>             
        </div>  
        @endif
    </div>
    
    <p></p>
@stop