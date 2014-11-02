
<div class="jumbroton">

<!-- if there are creation errors, they will show here -->
<div class="alert-danger" role="alert">
{{ HTML::ul($errors->all()) }}
</div>


	{{ Form::open([
      "route" => ["livro.update", $livro->id],
      "autocomplete" => "on",
      "class" => "form-horizontal",
      "method" => "PUT"
    ]) }}

	<input type="hidden" name="id" value="{{ $livro->id }}">
    <fieldset>
      <h1>Editar Livro</h1>
      <hr>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="nome">Titulo:</label>
        <div class="col-sm-9">
			{{ Form::text('nome', isset($livro->nome) ? $livro->nome : Input::old('nome'), array('class' => 'form-control')) }}
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="editora">Editora:</label>
        <div class="col-sm-9">
          {{ Form::text('editora', isset($livro->editora) ? $livro->editora : Input::old('editora'), array('class' => 'form-control')) }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="ano">Ano:</label>
        <div class="col-sm-9">
          {{ Form::text('ano', isset($livro->ano) ? $livro->ano : Input::old('ano'), array('class' => 'form-control')) }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="edicao">Edição:</label>
        <div class="col-sm-9">
          {{ Form::text('edicao', isset($livro->edicao) ? $livro->edicao : Input::old('edicao'), array('class' => 'form-control')) }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="isbn">ISBN:</label>
        <div class="col-sm-9">
          {{ Form::text('isbn', isset($livro->isbn) ? $livro->isbn : Input::old('isbn'), array('class' => 'form-control')) }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="colecao">Coleção:</label>
        <div class="col-sm-9">
          {{ Form::text('colecao', isset($livro->colecao) ? $livro->colecao : Input::old('colecao'), array('class' => 'form-control')) }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="paginas">Páginas:</label>
        <div class="col-sm-9">
          {{ Form::text('paginas', isset($livro->paginas) ? $livro->paginas : Input::old('paginas'), array('class' => 'form-control')) }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="masp">Autor:</label>
        <div class="col-sm-9">

          <div class="input-group">

			  <select name="autor_id" class="form-control">
				<option value="{{ $livro->autor->id }}">{{ $livro->autor->nome }}</option>
				@foreach ($autores as $autor)
					<option value="{{ $autor->id }}">{{ $autor->nome }}</option>
				@endforeach
			  </select>

			  <div class="input-group-btn">
	          	<a class="btn btn-sm btn-success pull-right" href="{{ URL::to('autor/create') }}"><i class="glyphicon glyphicon-plus"></i> Novo</a>
          	  </div>
		  </div>

        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="masp">Gênero:</label>
        <div class="col-sm-9">

          <div class="input-group">

			  <select name="genero_id" class="form-control">
				<option value="{{ $livro->genero->id }}">{{ $livro->genero->descricao }}</option>
				@foreach ($generos as $genero)
					<option value="{{ $genero->id }}">{{ $genero->descricao }}</option>
				@endforeach
			  </select>

			  <div class="input-group-btn">
	          	<a class="btn btn-sm btn-success pull-right" href="{{ URL::to('genero/create') }}"><i class="glyphicon glyphicon-plus"></i> Novo</a>
          	  </div>
		  </div>

        </div>
      </div>


    </fieldset>

    	<!-- edit this livro (uses the edit method found at GET /livro/{id}/edit -->
      <a class="btn btn-sm btn-success" href="{{ URL::to('livro') }}">Voltar</a>
      {{ Form::reset('Limpar!', array('class' => 'btn btn-sm btn-danger')) }}
      {{ Form::submit('Cadastrar!', array('class' => 'btn btn-sm btn-primary')) }}</a>

	{{ Form::close() }}
</div>