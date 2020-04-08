
@extends('template')
@section('conteudo')
<h1>Vendas Realizadas</h1>
<div class="table-responsive">
	<table class="table table-striped table-dark">
		<thead>
			<tr>
				<th scope="col"scope="col">Id</th>
				<th scope="col">Cliente</th>
				<th scope="col">Descrição</th>
				<th scope="col">Valor</th>
				<th scope="col">Operações</th>
			</tr>
		</thead>
		<tbody>
			@foreach($vend as $v)
			<tr>
				<td>{{$v->id}}</td>
				<td>{{ App\Clientes::find($v->id_cliente)->nome }}</td>
				<td>{{$v->descricao}}</td>
				<td>R$ {{$v->valor}}</td>
				<td>
					<a class="btn btn-warning" href="#"> Alterar</a>
					<a class="btn btn-danger" href="#">Excluir</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection