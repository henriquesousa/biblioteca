
<div class="jumbotron">

<div class="row">
	<div class="col-md-10">
		
		
	        <div class="col-md-3" >
			    <img alt="User Pic" src="https://lh4.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle">
			    <br/><br/>
			    <h4>MASP:</h4>
			    <h4><b>{{ $professor->masp }}</b></h4>
	        </div>
	        
	        <div class="col-md-7">
	        	<h3><u>Escola Estadual TalTalTal</u></h3>
	        	<br/>
	            <h4><b>{{ $professor->nome }}</b></h4>
	            <h4>RG: <b>{{ $professor->rg }}</b></h4>
	            <h4>CPF: <b>{{ $professor->cpf }}</b></h4>
	            <h4>Email: <b>{{ $professor->email }}</b></h4>
	            <h4>Telefone: <b>{{ $professor->telefone }}</b></h4>
	            <h4>Usuário: <b>{{ $professor->username }}</b></h4>

	            <hr>

	            <h4><b>ENDEREÇO</b></h4>
	            <h4>Logradouro: <b>{{ $professor->endereco->tipo }} - {{ $professor->endereco->logradouro }}</b></h4>
	            <h4>Bairro: <b>{{ $professor->endereco->bairro }}</b></h4>
	            <h4>Cidade: <b>{{ $professor->endereco->cidade }}</b></h4>
	            <h4>CEP: <b>{{ $professor->endereco->cep }}</b></h4>
	            <h4>UF: <b>{{ $professor->endereco->uf }}</b></h4>
	            
	           
	        </div>

	        <div class="col-md-8">

		        {{ Form::open(array('url' => 'professor/' . $professor->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Deletar', array('class' => 'btn btn-sm btn-danger')) }}
				{{ Form::close() }}

				<!-- show the professor (uses the show method found at GET /professor/{id} -->
				<a class="btn btn-sm btn-success pull-right" href="{{ URL::to('professor') }}">Voltar</a>

				<!-- edit this professor (uses the edit method found at GET /professor/{id}/edit -->
				<a class="btn btn-sm btn-info pull-right" href="{{ URL::to('professor/' . $professor->id . '/edit') }}">Editar</a>

			</div>        
        
	</div>
</div>

</div>