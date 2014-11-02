
<div class="jumbotron">

<!-- if there are creation errors, they will show here -->
<div class="alert-danger" role="alert">
{{ HTML::ul($errors->all()) }}
</div>

	{{ Form::open([
      "route" => ["emprestimo.update", $emprestimo->id],
      "autocomplete" => "on",
      "class" => "form-horizontal",
      "method" => "PUT"
    ]) }}

  <input type="hidden" name="id" value="{{ $emprestimo->id }}">
    <fieldset>
      <h1>Editar Emprestimo</h1>
      <hr>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="aluno">Aluno:</label>
        <div class="col-sm-9">

          <div class="input-group">

	        <select name="aluno_id" class="form-control">
		        <option value="{{ $emprestimo->aluno->id }}">{{ $emprestimo->aluno->nome }}</option>
		        @foreach ($alunos as $aluno)
		          <option value="{{ $aluno->id }}">{{ $aluno->nome }}</option>
		        @endforeach
	        </select>

	        <div class="input-group-btn">
	              <a class="btn btn-sm btn-success pull-right" href="{{ URL::to('aluno/create') }}"><i class="glyphicon glyphicon-plus"></i> Novo</a>
            </div>
    	  </div>

        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="livro">Livro:</label>
        <div class="col-sm-9">

          <div class="input-group">

        <select name="livro_id" class="form-control">
        <option value="{{ $emprestimo->livro->id }}">{{ $emprestimo->livro->nome }}</option>
        @foreach ($livros as $livro)
          <option value="{{ $livro->id }}">{{ $livro->nome }}</option>
        @endforeach
        </select>

        <div class="input-group-btn">
              <a class="btn btn-sm btn-success pull-right" href="{{ URL::to('livro/create') }}"><i class="glyphicon glyphicon-plus"></i> Novo</a>
              </div>
      </div>

        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="saida">Saída:</label>
        <div class="col-sm-9">
          {{ Form::text('saida', isset($emprestimo->saida) ? date('d/m/Y', strtotime($emprestimo->saida)) : date('d/m/Y', strtotime(Input::old('saida'))), array('class' => 'form-control data')) }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="entrega">Previsão:</label>
        <div class="col-sm-9">
          {{ Form::text('entrega', isset($emprestimo->entrega) ? date('d/m/Y', strtotime($emprestimo->entrega)) : date('d/m/Y', strtotime(Input::old('entrega'))), array('class' => 'form-control data')) }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="entrega_real">Entrega:</label>
        <div class="col-sm-9">
          @if(date('Y', strtotime($emprestimo->entrega_real)) < 2014)
          <input type="text" name="entrega_real" value="" class="form-control data">
          @else 
          {{ Form::text('entrega', isset($emprestimo->entrega_real) ? date('d/m/Y', strtotime($emprestimo->entrega_real)) : date('d/m/Y', strtotime(Input::old('entrega_real'))), array('class' => 'form-control data')) }}
          @endif
        </div>
      </div>

     

    </fieldset>

    <!-- edit this emprestimo (uses the edit method found at GET /emprestimo/{id}/edit -->
    <a class="btn btn-sm btn-success" href="{{ URL::to('emprestimo') }}">Voltar</a>

    {{ Form::reset('Limpar!', array('class' => 'btn btn-sm btn-danger')) }}
    {{ Form::submit('Cadastrar!', array('class' => 'btn btn-sm btn-primary')) }}
    {{ Form::close() }}
</div>