@extends('adminlte::page')

@section('title', 'E-Diaristas')

@section('content_header')
    <h1>Editar e atualizar: <b>{{$servico->nome}}</b></h1>
@stop

@section('content')

    @include('_mensagens')

    <form action="{{ route('servicos.update', $servico) }}" method="post">
        @method('PUT')
        @include('servicos._form');
    </form>
@stop
