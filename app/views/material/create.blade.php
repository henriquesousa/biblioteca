<div class="jumbotron">
	<h1>Material</h1>
	<hr>
	<!-- if there are creation errors, they will show here -->
	<div class="alert-danger" role="alert">
		{{ HTML::ul($errors->all()) }}
	</div>

	{{ Form::open(array('url' => 'material')) }}

		<div class="form-group">
	{{ Form::label('nome', 'Nome') }}
	{{ Form::text('nome', Input::old('nome'), array('class' => 'form-control', '')) }}
	</div>

	<div class="form-group">
	{{ Form::label('numero_serie', 'Numero Serie') }}
	{{ Form::text('numero_serie', Input::old('numero_serie'), array('class' => 'form-control', '')) }}
	</div>

	<div class="form-group">
	{{ Form::label('modelo', 'Modelo') }}
	{{ Form::text('modelo', Input::old('modelo'), array('class' => 'form-control', '')) }}
	</div>

	<div class="form-group">
	{{ Form::label('obs', 'Obs') }}
	{{ Form::text('obs', Input::old('obs'), array('class' => 'form-control', '')) }}
	</div>

		<!-- edit this material (uses the edit method found at GET /material/{id}/edit -->
		<a class="btn btn-sm btn-success" href="{{ URL::to('material') }}">Voltar</a>
		{{ Form::reset('Limpar!', array('class' => 'btn btn-sm btn-danger')) }}
		{{ Form::submit('Cadastrar!', array('class' => 'btn btn-sm btn-primary')) }}


	{{ Form::close() }}

</div>