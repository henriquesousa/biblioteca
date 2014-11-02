
<div class="jumbotron">
<h1>Cadastrar Livro</h1>
<hr>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}


{{ Form::open([
      "url" => 'livro',
      "autocomplete" => "on",
      "class" => "form-horizontal"
    ]) }}

		<div class="form-group">
		{{ Form::label('nome', 'Titulo') }}
		{{ Form::text('nome', Input::old('nome'), array('class' => 'form-control', 'required' => 'required', 'autofocus' => 'autofocus' )) }}
		</div>

		<div class="form-group">
		{{ Form::label('editora', 'Editora') }}
		{{ Form::text('editora', Input::old('editora'), array('class' => 'form-control', 'required' => 'required')) }}
		</div>

		<div class="form-group">
		{{ Form::label('ano', 'Ano') }}
		{{ Form::text('ano', Input::old('ano'), array('class' => 'form-control', 'required' => 'required')) }}
		</div>

		<div class="form-group">
		{{ Form::label('edicao', 'Edição') }}
		{{ Form::text('edicao', Input::old('edicao'), array('class' => 'form-control', 'required' => 'required')) }}
		</div>

		<div class="form-group">
		{{ Form::label('isbn', 'ISBN') }}
		{{ Form::text('isbn', Input::old('isbn'), array('class' => 'form-control', 'required' => 'required')) }}
		</div>

		<div class="form-group">
		{{ Form::label('autor', 'Autor') }}
			<div class="input-group">

			  <select name="autor_id" class="form-control">
				<option value="">Selecione...</option>
				@foreach ($autores as $autor)
					<option value="{{ $autor->id }}">{{ $autor->nome }}</option>
				@endforeach
			  </select>

			  <div class="input-group-btn">
	          	<a class="btn btn-sm btn-success pull-right" href="{{ URL::to('autor/create') }}"><i class="glyphicon glyphicon-plus"></i> Novo</a>
          	  </div>
			</div>
		</div>

		<div class="form-group">
		{{ Form::label('genero', 'Gênero') }}
			<div class="input-group">

			  <select name="genero_id" class="form-control">
				<option value="">Selecione...</option>
				@foreach ($generos as $genero)
					<option value="{{ $genero->id }}">{{ $genero->descricao }}</option>
				@endforeach
			  </select>

			  <div class="input-group-btn">
	          	<a class="btn btn-sm btn-success pull-right" href="{{ URL::to('genero/create') }}"><i class="glyphicon glyphicon-plus"></i> Novo</a>
          	  </div>
			</div>
		</div>

		<hr/>


		<div class="form-group">
		{{ Form::label('colecao', 'Coleção') }}
		{{ Form::text('colecao', Input::old('colecao'), array('class' => 'form-control', 'required' => 'required')) }}
		</div>

		<div class="form-group">
		{{ Form::label('paginas', 'Páginas') }}
		{{ Form::text('paginas', Input::old('paginas'), array('class' => 'form-control', 'required' => 'required')) }}
		</div>




	<!-- edit this livro (uses the edit method found at GET /livro/{id}/edit -->
	<a class="btn btn-sm btn-success" href="{{ URL::to('livro') }}">Voltar</a>
	{{ Form::reset('Limpar!', array('class' => 'btn btn-sm btn-danger')) }}
	{{ Form::submit('Cadastrar!', array('class' => 'btn btn-sm btn-primary')) }}
	

{{ Form::close() }}

</div>