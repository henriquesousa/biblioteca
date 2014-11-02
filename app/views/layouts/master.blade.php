<!DOCTYPE html>
<html lang="pt-br">
<head>

    <title>Biblioteca Digital</title> 

    <meta charset="utf-8">

	{{ HTML::style('assets/css/style.css"') }}
	{{ HTML::style('assets/css/bootstrap.css') }}

	{{ HTML::script('assets/js/jquery-1.11.1.min.js') }}
	{{ HTML::script('assets/js/bootstrap.js') }}

	{{ HTML::style('assets/css/jquery.dataTables.css') }}
	{{ HTML::style('assets/css/dataTables.bootstrap.css') }}

	{{ HTML::script('assets/js/jquery.dataTables.min.js') }}
	{{ HTML::script('assets/js/dataTables.bootstrap.js') }}
	{{ HTML::script('assets/js/formMasc.js') }}
	<style type="text/css">
		@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);
		body {
		  font-family: 'Open Sans', 'sans-serif';
		  background:#f0f0f0;
		}
		.navbar-nav>li>.dropdown-menu {
		    margin-top:20px;
		    border-top-left-radius:4px;
		    border-top-right-radius:4px;
		}
		.navbar-default .navbar-nav>li>a {
		    width:200px;
		    font-weight:bold;
		}
		.mega-dropdown {
		  position: static !important;
		  width:100%;
		}
		.mega-dropdown-menu {
		    padding: 20px 0px;
		    width: 100%;
		    box-shadow: none;
		    -webkit-box-shadow: none;
		}
		.mega-dropdown-menu:before {
		    content: "";
		    border-bottom: 15px solid #fff;
		    border-right: 17px solid transparent;
		    border-left: 17px solid transparent;
		    position: absolute;
		    top: -15px;
		    left: 285px;
		    z-index: 10;
		}
		.mega-dropdown-menu:after {
		    content: "";
		    border-bottom: 17px solid #ccc;
		    border-right: 19px solid transparent;
		    border-left: 19px solid transparent;
		    position: absolute;
		    top: -17px;
		    left: 283px;
		    z-index: 8;
		}
		.mega-dropdown-menu > li > ul {
		  padding: 0;
		  margin: 0;
		}
		.mega-dropdown-menu > li > ul > li {
		  list-style: none;
		}
		.mega-dropdown-menu > li > ul > li > a {
		  display: block;
		  padding: 3px 20px;
		  clear: both;
		  font-weight: normal;
		  line-height: 1.428571429;
		  color: #999;
		  white-space: normal;
		}
		.mega-dropdown-menu > li ul > li > a:hover,
		.mega-dropdown-menu > li ul > li > a:focus {
		  text-decoration: none;
		  color: #444;
		  background-color: #f5f5f5;
		}
		.mega-dropdown-menu .dropdown-header {
		  color: #428bca;
		  font-size: 18px;
		  font-weight:bold;
		}
		.mega-dropdown-menu form {
		    margin:3px 20px;
		}
		.mega-dropdown-menu .form-group {
		    margin-bottom: 3px;
		}


		#footer {
			
			width: 100%;
			height:20px;
			position: absolute;
			bottom: 0; 
			text-align:center;
		}

		.img7 {
			height: 300px;
		}
		.btn-nav .glyphicon {
		    padding-top: 16px;
			font-size: 40px;
		}
		.btn-nav {
		    background-color: #fff;
		    border: 1px solid #e0e1db;
		    -webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
		    -moz-box-sizing: border-box;    /* Firefox, other Gecko */
		    box-sizing: border-box;         /* Opera/IE 8+ */
		}
		.btn-nav:hover {
		    color: #e92d00;
		    cursor: pointer;
		    -webkit-transition: color 1s; /* For Safari 3.1 to 6.0 */
		    transition: color 1s;
		}

	</style>
    
</head>

<body>


<!-- menu superior -->
<div class="container">
    <div class="row">
		<div class="btn-group btn-group-justified">
            <div class="btn-group">
                <a href='{{ URL::to("/") }}' type="button" class="btn btn-nav">
                    <span class="glyphicon glyphicon-home"></span>
    			    <p>Index</p>
                </a>
            </div>
            <div class="btn-group">
                <a href='{{ URL::to("funcionario") }}' type="button" class="btn btn-nav">
                    <span class="glyphicon glyphicon-user"></span>
    			    <p>Funcionario</p>
                </a>
            </div>
            <div class="btn-group">
                <a href='{{ URL::to("professor") }}' type="button" class="btn btn-nav">
                    <span class="glyphicon glyphicon-user"></span>
    			    <p>Professores</p>
                </a>
            </div>
            <div class="btn-group">
                <a href='{{ URL::to("aluno") }}' type="button" class="btn btn-nav">
                    <span class="glyphicon glyphicon-user"></span>
    			    <p>Aluno</p>
                </a>
            </div>
            <div class="btn-group">
                <a href='{{ URL::to("material") }}' type="button" class="btn btn-nav">
                    <span class="glyphicon glyphicon-th-list"></span>
    			    <p>Material</p>
                </a>
            </div>
            <div class="btn-group">
                <a href='{{ URL::to("livro") }}' type="button" class="btn btn-nav">
                    <span class="glyphicon glyphicon-book"></span>
    			    <p>Livro</p>
                </a>
            </div>
            <div class="btn-group">
                <a href='{{ URL::to("emprestimo") }}' type="button" class="btn btn-nav">
                    <span class="glyphicon glyphicon-list-alt"></span>
    			    <p>Emprestimo</p>
                </a>
            </div>
            <div class="btn-group">
                <a href='{{ URL::to("agendamento") }}' type="button" class="btn btn-nav">
                    <span class="glyphicon glyphicon-calendar"></span>
    			    <p>Agendamento</p>
                </a>
            </div>
            <div class="btn-group">
                <a  href='{{ URL::to("logout") }}' type="button" class="btn btn-nav">
                    <span class="glyphicon glyphicon-off"></span>
    			    <p>Sair</p>
                </a>
            </div>
            
            
        </div>
	</div>
</div>

<!-- / menu superior -->




	<div class="container-mensagens" style="width: 1170px; margin-right: auto;margin-left: auto;">
	    @if (Session::has('message'))
			<div class="alert alert-info">
				<button type="button" class="close" data-dismiss="alert">×</button>
	        	<h5><strong>{{ Session::get('message') }}</strong></h5>
			</div>
		@endif
	</div>

	<div class="container">

	   	{{ $content }}

	   
	</div>
		
	

	
	<script type="text/javascript">
		$(".close").click(function(){$(".alert").show().hide("slow");});
	</script>

	<script type="text/javascript">
      /*
      Please consider that the JS part isn't production ready at all, I just code it to show the concept of merging filters and titles together !
      */
      $(document).ready(function(){
        //mascara para exibição jquery
          $('.phone').mask('(00) 0000-0000');
          $('.cpf').mask('000.000.000-00');
          $('.data').mask('00/00/0000');
          $('.cep').mask('00.000-000');
      });
  	</script>

</body>
</html>