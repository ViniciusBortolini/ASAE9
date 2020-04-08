<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
			height: 14%;
		}
		body{
			background-color: #F7F5D9;
		}
		th, td{
			text-align: center;
		}
	</style>
	<title></title>
</head>
<body>
	<nav class="navbar navbar-dark bg-dark">
		<a class="navbar-brand" href="cadastro">Cadastrar</a>
		<a class="navbar-brand">Processos</a>
		<a class="navbar-brand" href="listar">Relatórios</a>
		<a class="navbar-brand">Configurações</a>
		<form class="form-inline">
			<input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
		</form>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>	
			<div class="col-md-8">
				<nav class="navbar navbar-dark bg-dark mt-1">
					<a class="navbar-brand">Lista de Clientes</a>
					<form class="form-inline">
						<input class="form-control mr-sm-2" type="search" placeholder="..." aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Filtrar</button>
					</form>
				</nav>
				@yield('conteudo')
			</div>
			<div class="col-md-2"></div>	
		</div>
	</div>
</body>
</html>