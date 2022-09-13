@extends('adminlte::page')

@section('title', 'E-Diaristas')

@section('content_header')
    <h1>Lista de Serviços</h1>
@stop

@section('content')

@if(session('mensagem'))
    <div class="alert alert-success">
      {{session('mensagem')}}
    </div>    
@endif

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
            <td>
              <div class="row">
              <a type="button" href="{{ route('servicos.edit',$servico) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a> 
              <form action="{{ route('servicos.destroy',$servico) }}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
              </form>
            </div>
            </td>
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