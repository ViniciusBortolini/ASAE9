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
		/*mesmo alterando o valor dentro do input ele não muda*/
		input{
			width: 20%;
		}
		nav{
			height: 8%;
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
		<a class="navbar-brand">Relatórios</a>
		<a class="navbar-brand">Configurações</a>
		<form class="form-inline">
			<input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
		</form>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>	
			<div class="col-md-10">
				<nav class="navbar navbar-dark bg-dark mt-1">
					<a class="navbar-brand">Lista de Clientes</a>
					<form class="form-inline">
						<input class="form-control mr-sm-2" type="search" placeholder="..." aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Filtrar</button>
					</form>
				</nav>
				<div class="table-responsive">
					<table class="table table-striped table-dark">
						<thead>
							<tr>
								<th scope="col"scope="col">Id</th>
								<th scope="col">Nome</th>
								<th scope="col">Cep</th>
								<th scope="col">Estado</th>
								<th scope="col">Cidade</th>
								<th scope="col">Endereco</th>
							</tr>
						</thead>
						<tbody>
							@foreach($cli as $c)
							<tr>
								<td>{{$c->id}}</td>
								<td>{{$c->nome}}</td>
								<td>{{$c->cep}}</td>
								<td>{{$c->estado}}</td>
								<td>{{$c->cidade}}</td>
								<td>{{$c->endereco}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-md-1"></div>	
		</div>
	</div>
</body>
</html>