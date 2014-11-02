
<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

<h3>Editar Autor</h3><hr>

{{ Form::model($autor, array('route' => array('autor.update', $autor->id), 'method' => 'PUT', "class" => "form-horizontal")) }}

	{{ Form::hidden('id', null, array('class' => 'form-control')) }}
		
	<div class="form-group">
        <label class="col-sm-3 control-label" for="telefone">Nome:</label>
        <div class="col-sm-9">
        	{{ Form::text('nome', null, array('class' => 'form-control', '')) }}
        </div>
     </div>


	{{ Form::submit('Editar!', array('class' => 'btn btn-sm btn-primary pull-right')) }}
	<a class="btn btn-sm btn-success pull-right" href="{{ URL::to('autor') }}">Voltar</a>

{{ Form::close() }}