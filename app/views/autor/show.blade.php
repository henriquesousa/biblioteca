<h1>{{ $autor->name }}</h1>

<div class="jumbotron text-center">
	<h2>{{ $autor->name }}</h2>
	<p>
		<strong>Nome:</strong> {{ $autor->nome }}<br>

	</p>

	<!-- edit this autor (uses the edit method found at GET /autor/{id}/edit -->
	<a class="btn btn-sm btn-info pull-right" href="{{ URL::to('autor/' . $autor->id . '/edit') }}">Editar</a>
	<!-- show the autor (uses the show method found at GET /autor/{id} -->
	<a class="btn btn-sm btn-success pull-right" href="{{ URL::to('autor') }}">Voltar</a> 
</div>