@csrf
        <div class="card">
            <div class="card-body">              

                <fieldset>
                    <legend>Dados do usuário</legend>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input value="{{ old('name', $usuario->name ?? '') }}" type="input" required class="form-control" name="name" id="name" placeholder="nome do usuário">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">e-Mail</label>
                                <input value="{{ old('email', $usuario->email ?? '') }}" type="email" required class="form-control" name="email" id="email" placeholder="email">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password">Senha</label>
                                <input value="{{ old('password', $usuario->password ?? '') }}" type="password" required class="form-control" name="password" id="password" placeholder="password">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pass">Confirmar senha</label>
                                <input value="{{ old('password', $usuario->password ?? '') }}" type="password" required class="form-control" name="password" id="password" placeholder="password">
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