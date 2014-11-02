
<div class="jumbotron">
<h1>Aluno</h1>
<hr>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}


{{ Form::open([
      "url" => 'aluno',
      "autocomplete" => "on",
      "class" => "form-horizontal"
    ]) }}

		<div class="form-group">
		{{ Form::label('nome', 'Nome') }}
		{{ Form::text('nome', Input::old('nome'), array('class' => 'form-control', 'required' => 'required', 'autofocus' => 'autofocus' )) }}
		</div>

		<div class="form-group">
		{{ Form::label('pai', 'Pai') }}
		{{ Form::text('pai', Input::old('pai'), array('class' => 'form-control', 'required' => 'required')) }}
		</div>

		<div class="form-group">
		{{ Form::label('mae', 'Mãe') }}
		{{ Form::text('mae', Input::old('mae'), array('class' => 'form-control', 'required' => 'required')) }}
		</div>

		<div class="form-group">
		{{ Form::label('classe', 'Classe') }}
			<div class="input-group">

			  <select name="classe_id" class="form-control">
				<option >Selecione...</option>
				@foreach ($classes as $classe)
					<option value="{{ $classe->id }}">{{ $classe->serie }} - {{ $classe->turma }} - {{ $classe->turno }}</option>
				@endforeach
			  </select>

			  <div class="input-group-btn">
	          	<a class="btn btn-sm btn-success pull-right" href="{{ URL::to('classe/create') }}"><i class="glyphicon glyphicon-plus"></i> Novo</a>
          	  </div>
			</div>
		</div>

		<hr/>


		<div class="form-group">
		{{ Form::label('tipo', 'Tipo') }}
		{{ Form::text('tipo', Input::old('tipo'), array('placeholder' => 'Av / Rua / Córrego', 'class'=> 'form-control', 'required' => 'required')) }}
		</div>

		<div class="form-group">
		{{ Form::label('logradouro', 'Logradouro') }}
		{{ Form::text('logradouro', Input::old('logradouro'), array('class' => 'form-control', 'required' => 'required')) }}
		</div>

		<div class="form-group">
		{{ Form::label('bairro', 'Bairro') }}
		{{ Form::text('bairro', Input::old('bairro'), array('class' => 'form-control', 'required' => 'required')) }}
		</div>

		<div class="form-group">
		{{ Form::label('cidade', 'Cidade') }}
		{{ Form::text('cidade', Input::old('cidade'), array('class' => 'form-control', 'required' => 'required')) }}
		</div>

		<div class="form-group">
		{{ Form::label('cep', 'CEP') }}
		{{ Form::text('cep', Input::old('cep'), array('placeholder' => 'somente números', 'class'=> 'form-control cep', 'required' => 'required')) }}
		</div>

		<div class="form-group">
		{{ Form::label('uf', 'UF') }}
		{{ Form::text('uf', Input::old('uf'), array('placeholder' => 'MG / SP / ES ...', 'class'=> 'form-control', 'required' => 'required')) }}
		</div>




	<!-- edit this aluno (uses the edit method found at GET /aluno/{id}/edit -->
	<a class="btn btn-sm btn-success" href="{{ URL::to('aluno') }}">Voltar</a>
	{{ Form::reset('Limpar!', array('class' => 'btn btn-sm btn-danger')) }}
	{{ Form::submit('Cadastrar!', array('class' => 'btn btn-sm btn-primary')) }}

{{ Form::close() }}

</div>