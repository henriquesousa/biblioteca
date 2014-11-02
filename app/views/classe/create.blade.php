<div class="jumbotron">
	<h1>Classe</h1>
	<hr>

	<!-- if there are creation errors, they will show here -->
	{{ HTML::ul($errors->all()) }}

	{{ Form::open(array('url' => 'classe')) }}

		<div class="form-group">
	{{ Form::label('serie', 'Serie') }}
	{{ Form::text('serie', Input::old('serie'), array('class' => 'form-control', 'required' => 'required', 'autofocus' => 'autofocus')) }}
	</div>

	<div class="form-group">
	{{ Form::label('turno', 'Turno') }}
	{{ Form::text('turno', Input::old('turno'), array('class' => 'form-control', '')) }}
	</div>

	<div class="form-group">
	{{ Form::label('turma', 'Turma') }}
	{{ Form::text('turma', Input::old('turma'), array('class' => 'form-control', '')) }}
	</div>

		<!-- edit this classe (uses the edit method found at GET /classe/{id}/edit -->
		<a class="btn btn-sm btn-success" href="{{ URL::to('classe') }}">Voltar</a>
		{{ Form::reset('Limpar!', array('class' => 'btn btn-sm btn-danger')) }}
		{{ Form::submit('Cadastrar!', array('class' => 'btn btn-sm btn-primary')) }}

	{{ Form::close() }}

</div>