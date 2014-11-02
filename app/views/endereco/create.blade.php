<h1>Endereco</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'endereco')) }}

<div class="form-group">
{{ Form::label('tipo', 'Tipo') }}
{{ Form::text('tipo', Input::old('tipo'), array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('logradouro', 'Logradouro') }}
{{ Form::text('logradouro', Input::old('logradouro'), array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('bairro', 'Bairro') }}
{{ Form::text('bairro', Input::old('bairro'), array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('cidade', 'Cidade') }}
{{ Form::text('cidade', Input::old('cidade'), array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('cep', 'CEP') }}
{{ Form::text('cep', Input::old('cep'), array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('uf', 'UF') }}
{{ Form::text('uf', Input::old('uf'), array('class' => 'form-control', '')) }}
</div>



	{{ Form::submit('Cadastrar!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}