
		<div class="jumbotron">
			
			

			<div class="container">
				<div class="row">
					<div class="col-md-5">
					<h1>Bem-vindo!</h1>

					
						<br>

						<h2>Biblioteca Digital</h2>

						<h3><u>{{ Auth::user()->nome }}</u></h3>

						

						<div class="text-center col-md-12">
						<h4><b>Escola Estadual Joel Mares</b></h4>
						<h6>Ensino Fundamental e Ensino Medio</h6>
						<h6>Criado pelo decreto n 37.321 de 05-10-1995</h6>
						<br>
						<h6>Rua Flavio Antunes Reis, 245 - Bairro São Francisco</h6>
						<h6>Telefax: (0xx33) 3721 - 2484 / email: <a href="mailto:eejoelmares@gmial.com"> eejoelmares@gmial.com</h6>

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




