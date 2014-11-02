
<div class="jumbotron">

<div class="row">
	<div class="col-md-10">
		
		
	        <div class="col-md-3" >
			    <img alt="User Pic" src="https://lh4.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle">
			    <br/><br/>
			    <h4>MASP:</h4>
			    <h4><b>{{ $funcionario->masp }}</b></h4>
	        </div>
	        
	        <div class="col-md-7">
	        	<h3><u>Escola Estadual Joel Mares</u></h3>
	        	<br/>
	            <h4><b>{{ $funcionario->nome }}</b></h4>
	            <h4>Email: <b>{{ $funcionario->email }}</b></h4>
	            <h4>Telefone: <b>{{ $funcionario->telefone }}</b></h4>
	            <h4>Usuário: <b>{{ $funcionario->username }}</b></h4>

	            <hr>

	            <h4>ENDEREÇO</h4>
	            <h4>Logradouro: <b>{{ $funcionario->endereco->tipo }} - {{ $funcionario->endereco->logradouro }}</b></h4>
	            <h4>Bairro: <b>{{ $funcionario->endereco->bairro }}</b></h4>
	            <h4>Cidade: <b>{{ $funcionario->endereco->cidade }}</b></h4>
	            <h4>CEP: <b>{{ $funcionario->endereco->cep }}</b></h4>
	            <h4>UF: <b>{{ $funcionario->endereco->uf }}</b></h4>
	            
	           
	        </div>

	        <div class="col-md-8">

		        {{ Form::open(array('url' => 'funcionario/' . $funcionario->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Deletar', array('class' => 'btn btn-sm btn-danger')) }}
				{{ Form::close() }}

				<!-- show the funcionario (uses the show method found at GET /funcionario/{id} -->
				<a class="btn btn-sm btn-success pull-right" href="{{ URL::to('funcionario') }}">Voltar</a>

				<!-- edit this funcionario (uses the edit method found at GET /funcionario/{id}/edit -->
				<a class="btn btn-sm btn-info pull-right" href="{{ URL::to('funcionario/' . $funcionario->id . '/edit') }}">Editar</a>

			</div>        
        
	</div>
</div>

</div>