<h1>{{ $genero->name }}</h1>

<div class="jumbotron text-center">
	<h2>{{ $genero->name }}</h2>
	<p>
		<strong>Descricao:</strong> {{ $genero->descricao }}<br>

	</p>
	<!-- edit this genero (uses the edit method found at GET /genero/{id}/edit -->
	<a class="btn btn-sm btn-info pull-right" href="{{ URL::to('genero/' . $genero->id . '/edit') }}">Editar</a>
	<!-- show the genero (uses the show method found at GET /genero/{id} -->
	<a class="btn btn-sm btn-success pull-right" href="{{ URL::to('genero') }}">Voltar</a> 
</div>
