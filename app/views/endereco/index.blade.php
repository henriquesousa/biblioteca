<h1>Endereco</h1>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Id</th>
<th>Tipo</th>
<th>Logradouro</th>
<th>Bairro</th>
<th>Cidade</th>
<th>Cep</th>
<th>Uf</th>

			<td></td>
		</tr>
	</thead>
	<tbody>
	@foreach($endereco as $key => $value)
		<tr>
			<td> {{ $value->id}} </td>
<td> {{ $value->tipo}} </td>
<td> {{ $value->logradouro}} </td>
<td> {{ $value->bairro}} </td>
<td> {{ $value->cidade}} </td>
<td> {{ $value->cep}} </td>
<td> {{ $value->uf}} </td>


			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the endereco (uses the destroy method DESTROY /endereco/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->

				{{ Form::open(array('url' => 'endereco/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Deletar', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}

				<!-- show the endereco (uses the show method found at GET /endereco/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('endereco/' . $value->id) }}">Visualizar</a>

				<!-- edit this endereco (uses the edit method found at GET /endereco/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('endereco/' . $value->id . '/edit') }}">Editar</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

<a class="btn btn-small btn-info" href="{{ URL::to('endereco/create') }}">Novo</a>