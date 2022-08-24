@extends('adminlte::page')

@section('title', 'E-Diaristas')

@section('content_header')
    <h1>Lista de Serviços</h1>
@stop

@section('content')
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Serviço</th>
      <th scope="col">Ações</th>      
    </tr>
  </thead>
  <tbody>

    @forelse ($servicos as $servico)
      <tr id="servico{{$servico->id}}">
      <th scope="row">{{$servico->nome}}</th>
      <div class="group-btn">
            <td></td>
      </div>      
    </tr>   
    @empty
    <tr id="nadaencontrado">
        <th></th>
        <th>Nenhum registro foi encontrado!</th>
    </tr>    
    @endforelse
  </tbody>
</table>
<div class="d-flex hover justify-content-center">
    {{$servicos->links()}}
</div>
@stop