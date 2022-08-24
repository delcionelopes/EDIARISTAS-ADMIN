@extends('adminlte::page')

@section('title', 'Novo Serviço')

@section('content_header')
    <h1>Novo Serviço</h1>
@stop

@section('content')
    <form action="{{ route('servicos.store') }}" method="post">
        @csrf
        <div class="card">
            <div class="card-body">
                <fieldset>
                    <legend>Identificação</legend>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="input" class="form-control" name="nome" id="nome" required placeholder="Nome do serviço">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="icone">Ícone</label>
                                <input type="input" class="form-control" name="icone" id="icone" required placeholder="ícone">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="posicao">Posição na plataforma</label>
                                <input type="input" class="form-control" name="posicao" id="posicao" required placeholder="Posição do serviço na plataforma">
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Globais</legend>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="valor_minimo">Valor Mínimo</label>
                                <input type="input" class="form-control" name="valor_minimo" id="valor_minimo" required placeholder="Valor mínimo do serviço">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="quantidade_horas">Quantidade Mínima de horas</label>
                                <input type="input" class="form-control" name="quantidade_horas" id="quantidade_horas" required placeholder="Quantidade mínima de horas">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="porcentagem">Porcentagem de Comissão</label>
                                <input type="input" class="form-control" name="porcentagem" id="porcentagem" required placeholder="porcentagem de comissão no serviço">
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Cômodos</legend>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="valor_quarto">Valor por Quarto</label>
                                <input type="input" class="form-control" name="valor_quarto" id="valor_quarto" required placeholder="Valor por quarto">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="horas_quarto">Quantidade de Horas por quarto</label>
                                <input type="input" class="form-control" name="horas_quarto" id="horas_quarto" required placeholder="Quantidade horas por quarto">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="valor_sala">Valor por sala</label>
                                <input type="input" class="form-control" name="valor_sala" id="valor_sala" required placeholder="Valor por sala">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="horas_sala">Quantidade de horas por sala</label>
                                <input type="input" class="form-control" name="horas_sala" id="horas_sala" required placeholder="Quantidade horas por sala">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="valor_banheiro">Valor por banheiro</label>
                                <input type="input" class="form-control" name="valor_banheiro" id="valor_banheiro" required placeholder="Valor por banheiro">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="horas_banheiro">Quantidade de horas por banheiro</label>
                                <input type="input" class="form-control" name="horas_banheiro" id="horas_banheiro" required placeholder="Quantidade horas por banheiro">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="valor_cozinha">Valor por cozinha</label>
                                <input type="input" class="form-control" name="valor_cozinha" id="valor_cozinha" required placeholder="Valor por cozinha">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="horas_cozinha">Quantidade de horas por cozinha</label>
                                <input type="input" class="form-control" name="horas_cozinha" id="horas_cozinha" required placeholder="Quantidade horas por cozinha">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="valor_quintal">Valor por quintal</label>
                                <input type="input" class="form-control" name="valor_quintal" id="valor_quintal" required placeholder="Valor por quintal">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="horas_quintal">Quantidade de horas por quintal</label>
                                <input type="input" class="form-control" name="horas_quintal" id="horas_quintal" required placeholder="Quantidade horas por quintal">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="valor_outros">Valor por outros tipos de cômodos</label>
                                <input type="input" class="form-control" name="valor_outros" id="valor_outros" required placeholder="Valor por outros">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="horas_outros">Quantidade de horas por outros tipos de cômodos</label>
                                <input type="input" class="form-control" name="horas_outros" id="horas_outros" required placeholder="Quantidade horas por outros">
                            </div>
                        </div>
                    </div>
                </fieldset>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Salvar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@stop