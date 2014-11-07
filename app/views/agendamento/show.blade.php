<div class="jumbotron text-center">
	<h2><u>Escola Estadual Joel Mares</u></h2>
	<h2>{{ $agendamento->name }}</h2>
	<p>
		<strong>Professor:</strong> {{ $agendamento->professor->nome }}<br>
		<strong>Material:</strong> {{ $agendamento->material->nome }}<br>
		<strong>Saida:</strong> {{ date('d/m/Y', strtotime($agendamento->saida)) }}<br>
		<strong>Entrega:</strong> {{ date('d/m/Y', strtotime($agendamento->entrega)) }}
		@if($agendamento->entrega > $agendamento->saida)
		{{ date('d/m/Y', strtotime($agendamento->entrega)) }}
		@endif
		<br>
		<strong>Turno:</strong> {{ $agendamento->turno }}<br>
		<strong>Horario:</strong> {{ $agendamento->horario }}<br>
		
		<strong>Funcionário responsável:</strong> {{ $agendamento->funcionario->nome }}<br>

	</p>
		        <div class="col-md-8">

		        {{ Form::open(array('url' => 'agendamento/' . $agendamento->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Deletar', array('class' => 'btn btn-sm btn-danger')) }}
				{{ Form::close() }}

				

				<!-- edit this agendamento (uses the edit method found at GET /agendamento/{id}/edit -->
				<a class="btn btn-sm btn-info pull-right" href="{{ URL::to('agendamento/' . $agendamento->id . '/edit') }}">Editar</a>

				<!-- show the agendamento (uses the show method found at GET /agendamento/{id} -->
				<a class="btn btn-sm btn-success pull-right" href="{{ URL::to('agendamento') }}">Voltar</a>

			</div>
</div>