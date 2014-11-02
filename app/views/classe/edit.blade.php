<h1>{{ $classe->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($classe, array('route' => array('classe.update', $classe->id), 'method' => 'PUT')) }}

	{{ Form::hidden('id', null, array('class' => 'form-control')) }}
	<div class="form-group">
	{{ Form::label('serie', 'Serie') }}
	{{ Form::text('serie', null, array('class' => 'form-control', '')) }}
	</div>

	<div class="form-group">
	{{ Form::label('turno', 'Turno') }}
	{{ Form::text('turno', null, array('class' => 'form-control', '')) }}
	</div>

	<div class="form-group">
	{{ Form::label('turma', 'Turma') }}
	{{ Form::text('turma', null, array('class' => 'form-control', '')) }}
	</div>

	<a class="btn btn-sm btn-success" href="{{ URL::to('classe') }}">Voltar</a>
	{{ Form::submit('Editar!', array('class' => 'btn btn-sm btn-primary')) }}

{{ Form::close() }}