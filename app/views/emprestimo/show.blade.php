<h1>{{ $emprestimo->name }}</h1>

<div class="jumbotron text-center">
	<h2><u>Escola Estadual Joel Mares</u></h2>
	
	<p>
		<strong>Aluno :</strong> {{ $emprestimo->aluno->nome }}<br>
		<strong>Livro :</strong> {{ $emprestimo->livro->nome}}<br>
		<strong>Saida:</strong> {{ date('d/m/Y', strtotime($emprestimo->saida)) }}<br>
		<strong>Prevsão:</strong> {{ date('d/m/Y', strtotime($emprestimo->previsão)) }}<br>
		<strong>Entrega:</strong> {{ date('d/m/Y', strtotime($emprestimo->entrega_real)) }}<br>
		<strong>Multa:</strong> {{ $emprestimo->multa }}<br>
		<strong>Funcionario:</strong> {{ $emprestimo->funcionario->nome}}<br>
		
	</p>
</div>