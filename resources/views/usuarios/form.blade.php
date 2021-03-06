<div class="row">
    <div class="col-md-8">
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-2 control-label">Nome</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ $usuario->name or  old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>

    <div class="col-md-8" style="margin-top: 10px">
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-2 control-label">E-Mail</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ $usuario->email or  old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                      </span>
                @endif
            </div>
        </div>
    </div>

    <div class="col-md-8" style="margin-top: 10px">
        <div class="form-group{{ $errors->has('cpf') ? ' has-error' : '' }}">
            <label for="email" class="col-md-2 control-label">CPF</label>

            <div class="col-md-6">
                <input id="cpf" type="text" class="form-control" name="cpf" value="{{ $usuario->cpf or  old('cpf') }}" required>

                @if ($errors->has('cpf'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('cpf') }}</strong>
                                    </span>
                @endif
            </div>
        </div>
    </div>
    <div class="col-md-8" style="margin-top: 10px">
        <div class="form-group{{ $errors->has('date_birth') ? ' has-error' : '' }}">
            <label for="email" class="col-md-2 control-label">Data Nascimento</label>

            <div class="col-md-6">
                <input id="email" type="date" class="form-control" name="date_birth" value="{{ $usuario->date_birth or  old('date_birth') }}" required>

                @if ($errors->has('date_birth'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('date_birth') }}</strong>
                                    </span>
                @endif
            </div>
        </div>
    </div>
    <div class="col-md-8" style="margin-top: 10px">
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-2 control-label">Senha</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
        </div>
    </div>
    <div class="col-md-8" style="margin-top: 10px">
        <div class="form-group">
            <label for="password-confirm" class="col-md-2 control-label">Confirma Senha</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
        </div>

    </div>
    <div class="col-md-8" style="margin-top: 10px">
        <div class="form-group">
            <div class="col-md-2 col-md-offset-2">
                <button type="submit" class="btn btn-primary">
                    Cadastrar
                </button>
            </div>
        </div>
    </div>


    </div>
</div>