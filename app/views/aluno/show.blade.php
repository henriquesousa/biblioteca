
<div class="jumbotron">

<div class="row">
	<div class="col-md-10">
		
		
	        <div class="col-md-3" >
			    <img alt="User Pic" src="https://lh4.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle">
			    
	        </div>
	        
	        <div class="col-md-7">
	        	<h3><u>Escola Estadual TalTalTal</u></h3>
	        	<br/>
	            <h4><b>{{ $aluno->nome }}</b></h4>
	            <h4>Pai: <b>{{ $aluno->pai }}</b></h4>
	            <h4>Mãe: <b>{{ $aluno->mae }}</b></h4>

	            <hr>

	            <h4>Serie: <b>{{ $aluno->classe->serie }}</b></h4>
	            <h4>Turma: <b>{{ $aluno->classe->turma }}</b></h4>
	            <h4>Turno: <b>{{ $aluno->classe->turno }}</b></h4>

	            <hr>

	            <h4><b>ENDEREÇO</b></h4>
	            <h4>Logradouro: <b>{{ $aluno->endereco->tipo }} - {{ $aluno->endereco->logradouro }}</b></h4>
	            <h4>Bairro: <b>{{ $aluno->endereco->bairro }}</b></h4>
	            <h4>Cidade: <b>{{ $aluno->endereco->cidade }}</b></h4>
	            <h4>CEP: <b>{{ $aluno->endereco->cep }}</b></h4>
	            <h4>UF: <b>{{ $aluno->endereco->uf }}</b></h4>
	            
	           
	        </div>

	        <div class="col-md-8">

		        {{ Form::open(array('url' => 'aluno/' . $aluno->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Deletar', array('class' => 'btn btn-sm btn-danger')) }}
				{{ Form::close() }}

				<!-- show the aluno (uses the show method found at GET /aluno/{id} -->
				<a class="btn btn-sm btn-success pull-right" href="{{ URL::to('aluno') }}">Voltar</a>

				<!-- edit this aluno (uses the edit method found at GET /aluno/{id}/edit -->
				<a class="btn btn-sm btn-info pull-right" href="{{ URL::to('aluno/' . $aluno->id . '/edit') }}">Editar</a>

			</div>        
        
	</div>
</div>

</div>