<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open([
      "route" => ["funcionario.update", $funcionario->id],
      "autocomplete" => "on",
      "class" => "form-horizontal",
      "method" => "PUT"
    ]) }}

	<input type="hidden" name="endereco" value="{{ $funcionario->endereco->id }}">
	<input type="hidden" name="id" value="{{ $funcionario->id }}">
    <fieldset>
      <legend>Editar funcionario</legend>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="nome">Nome:</label>
        <div class="col-sm-9">
			{{ Form::text('nome', isset($funcionario->nome) ? $funcionario->nome : Input::old('nome'), array('class' => 'form-control')) }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="telefone">Telefone:</label>
        <div class="col-sm-9">
          {{ Form::text('telefone', isset($funcionario->telefone) ? $funcionario->telefone : Input::old('telefone'), array('class' => 'form-control phone')) }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="masp">MASP:</label>
        <div class="col-sm-9">
          {{ Form::text('masp', isset($funcionario->masp) ? $funcionario->masp : Input::old('masp'), array('class' => 'form-control')) }}
        </div>
      </div>


      <div class="form-group">
        <label class="col-sm-3 control-label" for="email">E-mail:</label>
        <div class="col-sm-9">
          {{ Form::email('email', isset($funcionario->email) ? $funcionario->email : Input::old('email'), array('class' => 'form-control')) }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="username">Usuário:</label>
        <div class="col-sm-9">
          {{ Form::text('username', isset($funcionario->username) ? $funcionario->username : Input::old('username'), array('class' => 'form-control')) }}
        </div>
      </div>
      
      <div class="form-group">
        <label class="col-sm-3 control-label" for="tipo">Tipo:</label>
        <div class="col-sm-9">
          {{ Form::text('tipo', isset($funcionario->endereco->tipo) ? $funcionario->endereco->tipo : Input::old('tipo'), array('class' => 'form-control')) }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="logradouro">Logradouro:</label>
        <div class="col-sm-9">
          {{ Form::text('logradouro', isset($funcionario->endereco->logradouro) ? $funcionario->endereco->logradouro : Input::old('logradouro'), array('class' => 'form-control')) }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="cidade">Cidade:</label>
        <div class="col-sm-9">
          {{ Form::text('cidade', isset($funcionario->endereco->cidade) ? $funcionario->endereco->cidade : Input::old('cidade'), array('class' => 'form-control')) }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="bairro">Bairro:</label>
        <div class="col-sm-9">
          {{ Form::text('bairro', isset($funcionario->endereco->bairro) ? $funcionario->endereco->bairro : Input::old('bairro'), array('class' => 'form-control')) }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="cep">CEP:</label>
        <div class="col-sm-9">
          {{ Form::text('cep', isset($funcionario->endereco->cep) ? $funcionario->endereco->cep : Input::old('cep'), array('class' => 'form-control cep')) }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="uf">UF:</label>
        <div class="col-sm-9">
          {{ Form::text('uf', isset($funcionario->endereco->uf) ? $funcionario->endereco->uf : Input::old('uf'), array('class' => 'form-control')) }}
        </div>
      </div>

    </fieldset>

      {{ Form::submit('Editar!', array('class' => 'btn btn-sm btn-primary pull-right')) }}
      <a class="btn btn-sm btn-success pull-right" href="{{ URL::to('funcionario') }}">Voltar</a>

{{ Form::close() }}