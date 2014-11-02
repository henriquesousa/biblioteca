<div class="jumbotron">
	<h1>Autor</h1>
	<hr>
	<!-- if there are creation errors, they will show here -->
	{{ HTML::ul($errors->all()) }}

	{{ Form::open(array('url' => 'autor')) }}

		<div class="form-group">
	{{ Form::label('nome', 'Nome') }}
	{{ Form::text('nome', Input::old('nome'), array('class' => 'form-control', 'required' => 'required', 'autofocus' => 'autofocus')) }}
	</div>

		<a class="btn btn-sm btn-success" href="{{ URL::to('autor') }}">Voltar</a>
		{{ Form::submit('Cadastrar!', array('class' => 'btn btn-sm btn-primary')) }}

	{{ Form::close() }}

</div>