<div class="jumbotron">
	<h1>Gênero</h1>
	<hr>

	<!-- if there are creation errors, they will show here -->
	{{ HTML::ul($errors->all()) }}

	{{ Form::open(array('url' => 'genero')) }}

		<div class="form-group">
	{{ Form::label('descricao', 'Descricao') }}
	{{ Form::text('descricao', Input::old('descricao'), array('class' => 'form-control', 'required' => 'required', 'autofocus' => 'autofocus')) }}
	</div>

		<a class="btn btn-sm btn-success" href="{{ URL::to('genero') }}">Voltar</a>
		{{ Form::submit('Cadastrar!', array('class' => 'btn btn-sm btn-primary')) }}

	{{ Form::close() }}

</div>