@extends('adminlte::page')

@section('title', 'E-Diaristas')

@section('content_header')
    <h1>Novo Usuário</h1>
@stop

@section('content')

    @include('_mensagens')

    <form action="{{ route('usuarios.store') }}" method="post">
       @include('user._form');
    </form>
@stop
