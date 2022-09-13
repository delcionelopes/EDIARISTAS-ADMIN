@extends('adminlte::page')

@section('title', 'E-Diaristas')

@section('content_header')
    <h1>Lista de Usuários</h1>
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
      <th scope="col">Usuários</th>
      <th scope="col">Ações</th>      
    </tr>
  </thead>
  <tbody>

    @forelse ($usuarios as $usuario)
      <tr id="usuario{{$usuario->id}}">
      <th scope="row">{{$usuario->name}}</th>
      <div class="group-btn">
            <td>
              <div class="row">
              <a type="button" href="{{ route('usuarios.edit',$usuario) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a> 
              <form action="{{ route('usuarios.destroy',$usuario) }}" method="post">
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
    {{$usuarios->links()}}
</div>
@stop