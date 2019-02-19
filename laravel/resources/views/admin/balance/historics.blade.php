@extends('adminlte::page')

@section('title', 'Histórico de Movimentações')

@section('content_header')
    <h1>Histórico de Movimentacões</h1>

    <ol class="breadcrumb">
        <li><a href="">Home</a><li>
        <li><a href="">Historico de Movimentações</a><li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            
        <div class="box-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>N</th>
                        <th>Recarga</th>
                        <th>Saldo Anterior</th>
                        <th>Saldo Depois</th>
                        <th>Tipo</th>
                        <th>Data</th>
                    <tr>
                </thead>
                <tbody>
                    @forelse($historics as $historic)
                    <tr>
                        <td>{{ $historic->id}}</td>
                        <td>{{number_format($historic->amount, 2 ,',', '.')}}</td>
                        <td>{{number_format($historic->total_before, 2 ,',', '.')}}</td>
                        <td>{{number_format($historic->total_after, 2 ,',', '.')}}</td>
                        <td>{{$historic->type($historic->type)}}</td>
                        <td>{{$historic->date}}</td>
                        
                    <tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
            {!! $historics->links() !!}
        </div>  
    </div>
@stop