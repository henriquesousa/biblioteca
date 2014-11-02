<div class="jumbotron">
	<h1>Funcionario</h1>
	<hr>


	<!-- if there are creation errors, they will show here -->
			@if ($errors->has())
			
				@foreach ($errors->all() as $error)
					{{ $error }}		
				@endforeach
			
			@endif

	{{ Form::open(array('url' => 'funcionario')) }}

	<div class="form-group">
	{{ Form::label('nome', 'Nome') }}
	{{ Form::text('nome', Input::old('nome'), array('class' => 'form-control', 'required' => 'required', 'autofocus' => 'autofocus' )) }}
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

	<div class="form-group">
	{{ Form::label('username', 'Username') }}
	{{ Form::text('username', Input::old('username'), array('class' => 'form-control', 'required' => 'required')) }}
	</div>

	<div class="form-group">
	{{ Form::label('password', 'Senha') }}
	{{ Form::password('password', array('class' => 'form-control', 'required' => 'required')) }}
	</div>

	<div class="form-group">
	{{ Form::label('password_confirm', 'Confirma Senha') }}
	{{ Form::password('password_confirm', array('class' => 'form-control', 'required' => 'required')) }}
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



		<!-- edit this funcionario (uses the edit method found at GET /funcionario/{id}/edit -->
		<a class="btn btn-sm btn-success" href="{{ URL::to('funcionario') }}">Voltar</a>
		{{ Form::reset('Limpar!', array('class' => 'btn btn-sm btn-danger')) }}
		{{ Form::submit('Cadastrar!', array('class' => 'btn btn-sm btn-primary')) }}

	{{ Form::close() }}

</div>