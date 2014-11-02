<h1>{{ $endereco->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($endereco, array('route' => array('endereco.update', $endereco->id), 'method' => 'PUT')) }}

	{{ Form::hidden('id', null, array('class' => 'form-control')) }}
<div class="form-group">
{{ Form::label('tipo', 'Tipo') }}
{{ Form::text('tipo', null, array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('logradouro', 'Logradouro') }}
{{ Form::text('logradouro', null, array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('bairro', 'Bairro') }}
{{ Form::text('bairro', null, array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('cidade', 'Cidade') }}
{{ Form::text('cidade', null, array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('cep', 'Cep') }}
{{ Form::text('cep', null, array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('uf', 'Uf') }}
{{ Form::text('uf', null, array('class' => 'form-control', '')) }}
</div>



	{{ Form::submit('Editar!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}