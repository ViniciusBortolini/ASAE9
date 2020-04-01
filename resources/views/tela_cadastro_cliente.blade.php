<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css">
			h1, h2{
				font-weight: lighter;
				text-align: center;
			}
			h6{
				font-weight: bold;
			}
			input{
				width: 100%;
			}
			nav{
				height: 15%;
			}
			body{
				background-color: #F7F5D9;
			}
		</style>
	<title></title>
	</head>
<body>
	<nav class="navbar navbar-dark bg-dark">
					  <a class="navbar-brand">Cadastrar</a>
					   <a class="navbar-brand">Preencher</a>
					   <a class="navbar-brand" href="listar">Relatórios</a>
					   <a class="navbar-brand">Preencher</a>
					  <form class="form-inline">
					    <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
					    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
					  </form>
	</nav>

	<div class="container-fluid">
			<div class="row">
					<div class="col-md-2"></div>	
					<div class="col-md-8">
					
					<h1>Cadastro de Clientes</h1>
					<form method="POST" action="{{ route('cliente_add') }}">
						@csrf
						<h6>Nome</h6>
						<input type="text" name="nome" placeholder="Joao Silva">
						<h6 class="mt-2">CEP</h6>
						<input type="text" name="cep" placeholder="89500-000">
						<h6 class="mt-2">Estado</h6>
						<input type="text" name="estado" placeholder="Santa Catarina">
						<h6 class="mt-2">Cidade</h6>
						<input type="text" name="cidade" placeholder="Florianopolis">
						<h6 class="mt-2">Endereco</h6>
						<input type="text" name="endereco" placeholder="Av. Brasil">
						<br>
						<input type="submit" class="btn btn-secondary btn-lg mt-3" value="Cadastrar" class=>
					</form>
					</div>
					<div class="col-md-2"></div>		
</body>
</html>