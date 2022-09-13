@extends('adminlte::page')

@section('title', 'E-Diaristas')

@section('content_header')
    <h1>Editar e atualizar: <b>{{$usuario->name}}</b></h1>
@stop

@section('content')

    @include('_mensagens')

    <form action="{{ route('usuarios.update', $usuario) }}" method="post">
        @method('PUT')
        @include('user._form');
    </form>
@stop
