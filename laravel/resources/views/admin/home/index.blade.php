@extends('adminlte::page')

@section('title', 'ufmt-home')

@section('content_header')
    <h1>Restaurante Universitário</h1>
@stop

@section('content')
    <p><h2>Bem Vindo!! </h2> <h3> {{ Auth::user()->name }} </h3> Você está logado no Sistema UFMT-RU</p>
@stop