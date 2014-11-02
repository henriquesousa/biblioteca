
<div class="jumbotron">

<div class="row">
	<div class="col-md-10">
		
		
	        <div class="col-md-4" >
			    <img alt="Livro" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOi9jGN4Ru8tvHyBMK4pcYtWPlSmAPXMWoJrBBabN-MYBD5cUv" class="img-thumbnail">
			    <h4>ISBN: </h4>
			    <b>{{ $livro->isbn }}</b>
	        </div>
	        
	        <div class="col-md-6">
	        	<h3><u>Escola Estadual Joel Mares</u></h3>
	        	<br/>
	            <h4><b>{{ $livro->nome }}</b></h4>
	            <h4>Editora: <b>{{ $livro->editora }}</b></h4>
	            <h4>Ano: <b>{{ $livro->ano }}</b></h4>
	            <h4>Edição: <b>{{ $livro->edicao }}</b></h4>
	            
	            <h4>Coleção: <b>{{ $livro->colecao }}</b></h4>
	            <h4>Páginas: <b>{{ $livro->paginas }}</b></h4>
	            <h4>Autor: <b>{{ $livro->autor->nome }}</b></h4>
	            <h4>Gênero: <b>{{ $livro->genero->descricao }}</b></h4>
	            
	           
	        </div>

	        <div class="col-md-8">

		        {{ Form::open(array('url' => 'livro/' . $livro->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Deletar', array('class' => 'btn btn-sm btn-danger')) }}
				{{ Form::close() }}

				<!-- show the livro (uses the show method found at GET /livro/{id} -->
				<a class="btn btn-sm btn-success pull-right" href="{{ URL::to('livro') }}">Voltar</a>

				<!-- edit this livro (uses the edit method found at GET /livro/{id}/edit -->
				<a class="btn btn-sm btn-info pull-right" href="{{ URL::to('livro/' . $livro->id . '/edit') }}">Editar</a>

			</div>        
        
	</div>
</div>

</div>