<h1>{{ $material->name }}</h1>

<div class="jumbotron text-center">
	<h2><u>Escola Estadual Joel Mares</u></h2>
	<p>
		<strong>Nome:</strong> {{ $material->nome }}<br>
		<strong>Numero Serie:</strong> {{ $material->numero_serie }}<br>
		<strong>Modelo:</strong> {{ $material->modelo }}<br>
		<strong>Obs:</strong> {{ $material->obs }}<br>

	</p>

	<!-- edit this material (uses the edit method found at GET /material/{id}/edit -->
	<a class="btn btn-sm btn-info pull-right" href="{{ URL::to('material/' . $material->id . '/edit') }}">Editar</a>
	<!-- show the material (uses the show method found at GET /material/{id} -->
	<a class="btn btn-sm btn-success pull-right" href="{{ URL::to('material') }}">Voltar</a> 
	
</div>