<h1>{{ $endereco->name }}</h1>

<div class="jumbotron text-center">
	<h2>{{ $endereco->name }}</h2>
	<p>
		<strong>Tipo:</strong> {{ $endereco->tipo }}<br>
<strong>Logradouro:</strong> {{ $endereco->logradouro }}<br>
<strong>Bairro:</strong> {{ $endereco->bairro }}<br>
<strong>Cidade:</strong> {{ $endereco->cidade }}<br>
<strong>Cep:</strong> {{ $endereco->cep }}<br>
<strong>Uf:</strong> {{ $endereco->uf }}<br>

	</p>
</div>