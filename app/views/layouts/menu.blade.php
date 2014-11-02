<div class="navbar navbar-default navbar-static-top" role="navigation">

	<div class="container">
		<nav class="navbar navbar-default">
		    <div class="navbar-header">
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href='{{ URL::to("/") }}'>.:: Biblioteca Digital ::.</a>
			</div>
			
			
			<div class="collapse navbar-collapse js-navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown mega-dropdown">
						<a href="#" class="dropdown-toggle text-center" data-toggle="dropdown">Menu - Opções <span class="glyphicon glyphicon-chevron-down pull-right"></span></a>
						
						<ul class="dropdown-menu mega-dropdown-menu row">
							<li class="col-sm-3">
								<ul>
									<li class="dropdown-header"><i class="glyphicon glyphicon-tasks"></i> Opções Secundarias</li>
									<li><a href='{{ URL::to("funcionario") }}'> Livro - AUTOR</a></li>
									<li><a href='{{ URL::to("funcionario/create") }}'> Livro - GENERO</a></li>
									<li><a href='{{ URL::to("professor") }}'> Aluno - CLASSE</a></li>
								</ul>
							</li>
							<li class="col-sm-3">
								<ul>
									<li class="dropdown-header"><i class="glyphicon glyphicon-user"></i> Funcionario</li>
									<li><a href='{{ URL::to("funcionario") }}'>Listar</a></li>
									<li><a href='{{ URL::to("funcionario/create") }}'>Criar</a></li>
									<li class="divider"></li>
									<li class="dropdown-header"><i class="glyphicon glyphicon-user"></i> Professor</li>
									<li><a href='{{ URL::to("professor") }}'>Listar</a></li>
									<li><a href='{{ URL::to("professor/create") }}'>Criar</a></li>
									<li class="divider"></li>
									<li class="dropdown-header"><i class="glyphicon glyphicon-user"></i> Aluno</li>
									<li><a href='{{ URL::to("aluno") }}'>Listar</a></li>
									<li><a href='{{ URL::to("aluno/create") }}'>Criar</a></li>
								</ul>
							</li>
							<li class="col-sm-3">
								<ul>
									<li class="dropdown-header"><i class="glyphicon glyphicon-th-list"></i> Material</li>
									<li><a href='{{ URL::to("material") }}'>Listar</a></li>
									<li><a href='{{ URL::to("material/create") }}'>Criar</a></li>
									<li class="dropdown-header"><i class="glyphicon glyphicon-book"></i> Livro</li>
									<li><a href='{{ URL::to("livro") }}'>Listar</a></li>
									<li><a href='{{ URL::to("livro/create") }}'>Criar</a></li>
								</ul>
							</li>
							<li class="col-sm-3">
								<ul>
									<li class="dropdown-header"><i class="glyphicon glyphicon-list-alt"></i> Emprestimo</li>
									<li><a href='{{ URL::to("emprestimo") }}'>Listar</a></li>
									<li><a href='{{ URL::to("emprestimo/create") }}'>Criar</a></li>							
									<li class="divider"></li>
		                            <li class="dropdown-header"><i class="glyphicon glyphicon-calendar"></i> Agendamento</li>
		                            <li><a href='{{ URL::to("agendamento") }}'>Listar</a></li>
									<li><a href='{{ URL::to("agendamento/create") }}'>Criar</a></li>                                     
								</ul>
							</li>
						</ul>
						
					</li>


				</ul>

				<ul class="nav navbar-nav pull-right">
					<li><a class="" href='{{ URL::to("logout") }}'>Sair</a></li>
				</ul>
				
			</div><!-- /.nav-collapse -->

			
		</nav>
		</div>


	</div>