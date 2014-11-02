
<div class="jumbotron">
<h1>Emprestimo</h1>
<hr>
<!-- if there are creation errors, they will show here -->
<div class="alert-danger" role="alert">
{{ HTML::ul($errors->all()) }}
</div>

	{{ Form::open([
      "url" => "emprestimo",
      "autocomplete" => "on",
      "class" => "form-horizontal"
    ]) }}

    	<div class="form-group">
			{{ Form::label('aluno', 'Aluno') }}
			<div class="input-group">

			  <select name="aluno_id" class="form-control">
				<option >Selecione...</option>
				@foreach ($alunos as $aluno)
					<option value="{{ $aluno->id }}">{{ $aluno->nome }}</option>
				@endforeach
			  </select>

			  <div class="input-group-btn">
	          	<a class="btn btn-sm btn-success pull-right" href="{{ URL::to('aluno/create') }}"><i class="glyphicon glyphicon-plus"></i> Novo</a>
          	  </div>
			</div>
		</div>

    	<div class="form-group">
			{{ Form::label('livro', 'Livro') }}
			<div class="input-group">

			  <select name="livro_id" class="form-control">
				<option >Selecione...</option>
				@foreach ($livros as $livro)
					<option value="{{ $livro->id }}">{{ $livro->nome }}</option>
				@endforeach
			  </select>

			  <div class="input-group-btn">
	          	<a class="btn btn-sm btn-success pull-right" href="{{ URL::to('livro/create') }}"><i class="glyphicon glyphicon-plus"></i> Novo</a>
          	  </div>
			</div>
		</div>

    	
    	<!-- edit this emprestimo (uses the edit method found at GET /emprestimo/{id}/edit -->
		<a class="btn btn-sm btn-success" href="{{ URL::to('emprestimo') }}">Voltar</a>

		{{ Form::reset('Limpar!', array('class' => 'btn btn-sm btn-danger')) }}
    	{{ Form::submit('Cadastrar!', array('class' => 'btn btn-sm btn-primary')) }}
	

	{{ Form::close() }}
</div>