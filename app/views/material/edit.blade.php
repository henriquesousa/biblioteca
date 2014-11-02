<div class="jumbotron">
	<h1>Editar Materiais</h1>
	<hr>

	<!-- if there are creation errors, they will show here -->
	{{ HTML::ul($errors->all()) }}

	{{ Form::model($material, array('route' => array('material.update', $material->id), 'method' => 'PUT')) }}

		{{ Form::hidden('id', null, array('class' => 'form-control')) }}
	<div class="form-group">
	{{ Form::label('nome', 'Nome') }}
	{{ Form::text('nome', null, array('class' => 'form-control', '')) }}
	</div>

	<div class="form-group">
	{{ Form::label('numero_serie', 'Numero Serie') }}
	{{ Form::text('numero_serie', null, array('class' => 'form-control', '')) }}
	</div>

	<div class="form-group">
	{{ Form::label('modelo', 'Modelo') }}
	{{ Form::text('modelo', null, array('class' => 'form-control', '')) }}
	</div>

	<div class="form-group">
	{{ Form::label('obs', 'Obs') }}
	{{ Form::text('obs', null, array('class' => 'form-control', '')) }}
	</div>



		<!-- edit this material (uses the edit method found at GET /material/{id}/edit -->
	      <a class="btn btn-sm btn-success" href="{{ URL::to('material') }}">Voltar</a>

	      {{ Form::reset('Limpar!', array('class' => 'btn btn-sm btn-danger')) }}
	      {{ Form::submit('Cadastrar!', array('class' => 'btn btn-sm btn-primary')) }}

	{{ Form::close() }}

</div>