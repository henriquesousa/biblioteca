<h1>{{ $emprestimo->name }}</h1>

<div class="jumbotron text-center">
	<h2><u>Escola Estadual Joel Mares</u></h2>
	
	<p>
		<strong>Aluno :</strong> {{ $emprestimo->aluno->nome }}<br>
		<strong>Livro :</strong> {{ $emprestimo->livro->nome}}<br>
		<strong>Saida:</strong> {{ date('d/m/Y', strtotime($emprestimo->saida)) }}<br>
		<strong>Previsão:</strong> {{ date('d/m/Y', strtotime($emprestimo->previsao)) }}<br> 
		<strong>Entrega:</strong> @if $emprestimo->entrega_real > $emprestimo->saidadate 
		{{('d/m/Y', strtotime($emprestimo->entrega_real)) }}
		@endif<br>
		<strong>Multa:</strong> {{ $emprestimo->multa }}<br>
		<strong>Funcionario:</strong> {{ $emprestimo->funcionario->nome}}<br>
		
	</p>
</div>