
<div class="jumbotron">

<!-- if there are creation errors, they will show here -->
<div class="alert-danger" role="alert">
{{ HTML::ul($errors->all()) }}
</div>


	{{ Form::open([
      "route" => ["aluno.update", $aluno->id],
      "autocomplete" => "on",
      "class" => "form-horizontal",
      "method" => "PUT"
    ]) }}

	<input type="hidden" name="endereco" value="{{ $aluno->endereco->id }}">
	<input type="hidden" name="id" value="{{ $aluno->id }}">
    <fieldset>
      <legend>Editar aluno</legend>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="nome">Nome:</label>
        <div class="col-sm-9">
			{{ Form::text('nome', isset($aluno->nome) ? $aluno->nome : Input::old('nome'), array('class' => 'form-control')) }}
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="pai">Pai:</label>
        <div class="col-sm-9">
          {{ Form::text('pai', isset($aluno->pai) ? $aluno->pai : Input::old('pai'), array('class' => 'form-control')) }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="mae">Mãe:</label>
        <div class="col-sm-9">
          {{ Form::text('mae', isset($aluno->mae) ? $aluno->mae : Input::old('mae'), array('class' => 'form-control')) }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="masp">Classe:</label>
        <div class="col-sm-9">

          <div class="input-group">

			  <select name="classe_id" class="form-control">
				<option value="{{ $aluno->classe->id }}">{{ $aluno->classe->serie }} - {{ $aluno->classe->turma }} - {{ $aluno->classe->turno }}</option>
				@foreach ($classes as $classe)
					<option value="{{ $classe->id }}">{{ $classe->serie }} - {{ $classe->turma }} - {{ $classe->turno }}</option>
				@endforeach
			  </select>

			  <div class="input-group-btn">
	          	<a class="btn btn-sm btn-success pull-right" href="{{ URL::to('classe/create') }}"><i class="glyphicon glyphicon-plus"></i> Novo</a>
          	  </div>
		  </div>

        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="tipo">Tipo:</label>
        <div class="col-sm-9">
          {{ Form::text('tipo', isset($aluno->endereco->tipo) ? $aluno->endereco->tipo : Input::old('tipo'), array('class' => 'form-control')) }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="logradouro">Logradouro:</label>
        <div class="col-sm-9">
          {{ Form::text('logradouro', isset($aluno->endereco->logradouro) ? $aluno->endereco->logradouro : Input::old('logradouro'), array('class' => 'form-control')) }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="cidade">Cidade:</label>
        <div class="col-sm-9">
          {{ Form::text('cidade', isset($aluno->endereco->cidade) ? $aluno->endereco->cidade : Input::old('cidade'), array('class' => 'form-control')) }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="bairro">Bairro:</label>
        <div class="col-sm-9">
          {{ Form::text('bairro', isset($aluno->endereco->bairro) ? $aluno->endereco->bairro : Input::old('bairro'), array('class' => 'form-control')) }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="cep">CEP:</label>
        <div class="col-sm-9">
          {{ Form::text('cep', isset($aluno->endereco->cep) ? $aluno->endereco->cep : Input::old('cep'), array('class' => 'form-control cep')) }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="uf">UF:</label>
        <div class="col-sm-9">
          {{ Form::text('uf', isset($aluno->endereco->uf) ? $aluno->endereco->uf : Input::old('uf'), array('class' => 'form-control')) }}
        </div>
      </div>

    </fieldset>

    	<!-- edit this aluno (uses the edit method found at GET /aluno/{id}/edit -->
      <a class="btn btn-sm btn-success" href="{{ URL::to('aluno') }}">Voltar</a>
      {{ Form::reset('Limpar!', array('class' => 'btn btn-sm btn-danger')) }}
      {{ Form::submit('Editar!', array('class' => 'btn btn-sm btn-primary')) }}

	{{ Form::close() }}
</div>