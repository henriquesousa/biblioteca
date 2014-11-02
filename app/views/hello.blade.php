
		<div class="jumbotron">
			
			

			<div class="container">
				<div class="row">
					<div class="col-md-5 text-center">

					<h1>Biblioteca Digital</h1>
					<h2><b>Seja Bem-vindo! </b></h2>
					<h2><small><u>{{ Auth::user()->nome }}</u></small></h2>
					
						<br>

						<div class="text-center col-md-12">
						<h4><b>Escola Estadual Joel Mares</b></h4>
						<h6>Ensino Fundamental e Ensino Medio</h6>
						<h6>Criada pelo decreto n 37.321 de 05-10-1995</h6>
						<br>
						<h6>Rua Flaviano Antunes Reis, 245 - Bairro São Francisco, Almenara - MG</h6>
						<h6>Telefax: (0xx33) 3721 - 2484 / email: <a href="mailto:eejoelmares@gmail.com"> eejoelmares@gmail.com</h6>

						</div>
						

					</div>

					<div class="col-md-7">

						
						{{ HTML::image('/img/lll.jpg', 'Livros', array('class' => 'img-thumbnail img7')) }}
						
					</div>
					<div class="text-center col-md-12">
						{{ HTML::image('/img/logo.jpg', 'Logomarca', array('class' => 'img', 'width' => '150px')) }}
						{{ HTML::image('/img/pronatec.jpg', 'Logomarca', array('class' => 'img', 'width' => '150px')) }}
						</div>
					

					
				</div>
			</div>
		</div>




