
<div class="jumbotron">
  <div class="col-md-12">

<!-- if there are creation errors, they will show here -->
<div class="alert-danger" role="alert">
{{ HTML::ul($errors->all()) }}
</div>


	{{ Form::open([
      "route" => ["professor.update", $professor->id],
      "autocomplete" => "on",
      "class" => "form-horizontal",
      "method" => "PUT"
    ]) }}

	<input type="hidden" name="endereco" value="{{ $professor->endereco->id }}">
	<input type="hidden" name="id" value="{{ $professor->id }}">
    <fieldset>
      <h1>Editar Professor</h1>
      <hr>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="nome">Nome:</label>
        <div class="col-sm-9">
			{{ Form::text('nome', isset($professor->nome) ? $professor->nome : Input::old('nome'), array('class' => 'form-control')) }}
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="rg">RG:</label>
        <div class="col-sm-9">
          {{ Form::text('rg', isset($professor->rg) ? $professor->rg : Input::old('rg'), array('class' => 'form-control')) }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="cpf">CPF:</label>
        <div class="col-sm-9">
          {{ Form::text('cpf', isset($professor->cpf) ? $professor->cpf : Input::old('cpf'), array('class' => 'form-control cpf')) }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="masp">MASP:</label>
        <div class="col-sm-9">
          {{ Form::text('masp', isset($professor->masp) ? $professor->masp : Input::old('masp'), array('class' => 'form-control')) }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="telefone">Telefone:</label>
        <div class="col-sm-9">
          {{ Form::text('telefone', isset($professor->telefone) ? $professor->telefone : Input::old('telefone'), array('class' => 'form-control phone')) }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="email">E-mail:</label>
        <div class="col-sm-9">
          {{ Form::email('email', isset($professor->email) ? $professor->email : Input::old('email'), array('class' => 'form-control')) }}
        </div>
      </div>
      
      <div class="form-group">
        <label class="col-sm-3 control-label" for="tipo">Tipo:</label>
        <div class="col-sm-9">
          {{ Form::text('tipo', isset($professor->endereco->tipo) ? $professor->endereco->tipo : Input::old('tipo'), array('class' => 'form-control')) }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="logradouro">Logradouro:</label>
        <div class="col-sm-9">
          {{ Form::text('logradouro', isset($professor->endereco->logradouro) ? $professor->endereco->logradouro : Input::old('logradouro'), array('class' => 'form-control')) }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="cidade">Cidade:</label>
        <div class="col-sm-9">
          {{ Form::text('cidade', isset($professor->endereco->cidade) ? $professor->endereco->cidade : Input::old('cidade'), array('class' => 'form-control')) }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="bairro">Bairro:</label>
        <div class="col-sm-9">
          {{ Form::text('bairro', isset($professor->endereco->bairro) ? $professor->endereco->bairro : Input::old('bairro'), array('class' => 'form-control')) }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="cep">CEP:</label>
        <div class="col-sm-9">
          {{ Form::text('cep', isset($professor->endereco->cep) ? $professor->endereco->cep : Input::old('cep'), array('class' => 'form-control cep')) }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="uf">UF:</label>
        <div class="col-sm-9">
          {{ Form::text('uf', isset($professor->endereco->uf) ? $professor->endereco->uf : Input::old('uf'), array('class' => 'form-control')) }}
        </div>
      </div>

    </fieldset>

    	<!-- edit this professor (uses the edit method found at GET /professor/{id}/edit -->
      <a class="btn btn-sm btn-success" href="{{ URL::to('professor') }}">Voltar</a>

      {{ Form::reset('Limpar!', array('class' => 'btn btn-sm btn-danger')) }}
      {{ Form::submit('Cadastrar!', array('class' => 'btn btn-sm btn-primary')) }}

	{{ Form::close() }}
  </div>

</div>