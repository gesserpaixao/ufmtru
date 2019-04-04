@extends('adminlte::page')

@section('title', 'ru-cardápio')

@section('content_header')
    <h1>CARDÁPIO DA SEMANA</h1>

    <ol class="breadcrumb">
        <li><a href="">Home</a><li>
        <li><a href="">Cardápio</a><li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            
        <div class="box-body">
            <table class="table table-bordered table-hover">
                <thead class="thead thead-dark">
                    <tr>
                        <th>Data</th>
                        <th>Café da manhã</th>
                        <th>Almoço</th>
                        <th>Almoço Vegetariano</th>
                        <th>Jantar</th>
                        <th>Jantar Vegetariano</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($itemsshow as $Item)
                        <tr>
                            <td>{{date('d-m-Y', strtotime(str_replace('/','-',$Item->data)))}}</td>
                            <td>{{$Item->cafe}}</td>
                            <td>{{$Item->almoco}}</td>
                            <td>{{$Item->almoco_vegetariano}}</td>
                            <td>{{$Item->jantar}}</td>
                            <td>{{$Item->jantar_vegetariano}}</td>
                        
                        </tr>
                    @empty
                    @endforelse 
                </tbody>
            </table>
            
        </div>  
    </div>
@stop