<div class="jumbotron">
<h1>Professor</h1>
<hr>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'professor')) }}

		<div class="form-group">
		{{ Form::label('nome', 'Nome') }}
		{{ Form::text('nome', Input::old('nome'), array('class' => 'form-control', 'required' => 'required', 'autofocus' => 'autofocus' )) }}
		</div>

		<div class="form-group">
		{{ Form::label('rg', 'RG') }}
		{{ Form::text('rg', Input::old('rg'), array('class' => 'form-control', 'required' => 'required')) }}
		</div>

		<div class="form-group">
		{{ Form::label('cpf', 'CPF') }}
		{{ Form::text('cpf', Input::old('cpf'), array('class' => 'form-control cpf', 'required' => 'required')) }}
		</div>

		<div class="form-group">
		{{ Form::label('telefone', 'Telefone') }}
		{{ Form::text('telefone', Input::old('telefone'), array('class' => 'form-control phone', 'required' => 'required')) }}
		</div>

		<div class="form-group">
		{{ Form::label('masp', 'Masp') }}
		{{ Form::text('masp', Input::old('masp'), array('class' => 'form-control', 'required' => 'required')) }}
		</div>

		<div class="form-group">
		{{ Form::label('email', 'Email') }}
		{{ Form::text('email', Input::old('email'), array('class' => 'form-control', 'required' => 'required')) }}
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


	<!-- edit this professor (uses the edit method found at GET /professor/{id}/edit -->
	<a class="btn btn-sm btn-success" href="{{ URL::to('professor') }}">Voltar</a>

	{{ Form::reset('Limpar!', array('class' => 'btn btn-sm btn-danger')) }}
	{{ Form::submit('Cadastrar!', array('class' => 'btn btn-sm btn-primary')) }}

	

{{ Form::close() }}

</div>