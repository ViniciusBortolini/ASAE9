	<style type="text/css">

		#tes1{
			height: 14%;
		}

	</style>
@extends('template')
@section('conteudo')
				<nav class="navbar navbar-dark bg-dark mt-1" id=tes1>
					<a class="navbar-brand">Lista de Vendas</a>
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
				<th scope="col">Cliente</th>
				<th scope="col">Valor</th>
				<th scope="col"> Data</th>
				<th scope="col">Operações</th>
			</tr>
		</thead>
		<tbody>
			@foreach($vendas as $v)
			<tr>
				<td>{{$v->id}}</td>
				<td>{{ App\Clientes::find($v->id_cliente)->nome }}</td>
				<td>R$ {{$v->valor}}</td>
				<td>{{ $v->created_at}}</td>
				<td>
					<a class="btn btn-warning" href="{{route('vendas_itens', ['id' =>$v->id])}}"> Itens</a>
					<a class="btn btn-warning" href="#"> Alterar</a>
					<a class="btn btn-danger" href="#">Excluir</a>
					
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<a class="btn btn-primary" href="{{route('venda_cadastro')}}"> Cadastrar nova venda</a>
</div>

@endsection