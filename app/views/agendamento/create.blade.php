
<div class="jumbotron">
<h1>Agendamento</h1>
<hr>
<!-- if there are creation errors, they will show here -->
<div class="alert-danger" role="alert">
{{ HTML::ul($errors->all()) }}
</div>

	{{ Form::open([
      "url" => "agendamento",
      "autocomplete" => "on",
      "class" => "form-horizontal"
    ]) }}

    	<div class="form-group">
			{{ Form::label('material', 'Material') }}
			<div class="input-group">

			  <select name="material_id" class="form-control">
				<option value="" >Selecione...</option>
				@foreach ($materiais as $material)
					<option value="{{ $material->id }}">{{ $material->nome }}</option>
				@endforeach
			  </select>

			  <div class="input-group-btn">
	          	<a class="btn btn-sm btn-success pull-right" href="{{ URL::to('material/create') }}"><i class="glyphicon glyphicon-plus"></i> Novo</a>
          	  </div>
			</div>
		</div>

		
		<div class="form-group">
		{{ Form::label('entrega', 'Entrega') }}
		{{ Form::text('entrega', Input::old('entrega'), array('class' => 'form-control data', '')) }}
		</div>

		<div class="form-group">
		{{ Form::label('professor', 'Professor') }}
			<div class="input-group">

			  <select name="professor_id" class="form-control">
				<option value="" >Selecione...</option>
				@foreach ($professores as $professor)
					<option value="{{ $professor->id }}">{{ $professor->nome }}</option>
				@endforeach
			  </select>

			  <div class="input-group-btn">
	          	<a class="btn btn-sm btn-success pull-right" href="{{ URL::to('professor/create') }}"><i class="glyphicon glyphicon-plus"></i> Novo</a>
          	  </div>
			</div>
		</div>

		<div class="form-group">
		{{ Form::label('turno', 'Turno') }}
			<div class="input-group">

			  <select name="turno" class="form-control">
				<option value="" >Selecione...</option>
				<option value="Matutino">Matutino...</option>
				<option value="Noturno">Noturno...</option>
				<option value="Vespertino">Vespertino...</option>
				
			  </select>
			</div>
		</div>

		<div class="form-group">
		{{ Form::label('horario', 'Horario') }}
			<div class="input-group">

			  <select name="horario" class="form-control">
				<option value=""  >Selecione...</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				
			  </select>
			</div>
		</div>		

    	
    	<!-- edit this agendamento (uses the edit method found at GET /agendamento/{id}/edit -->
		<a class="btn btn-sm btn-success" href="{{ URL::to('agendamento') }}">Voltar</a>

		{{ Form::reset('Limpar!', array('class' => 'btn btn-sm btn-danger')) }}
    	{{ Form::submit('Cadastrar!', array('class' => 'btn btn-sm btn-primary')) }}
	

	{{ Form::close() }}
</div>