
@extends('template')
@section('conteudo')


<h1>Vendas do cliente{{ $clientes->nome }}</h1>

<div class="table-responsive">
	<table class="table table-striped table-dark">

		Cliente: 
		<thead>
			<tr>
				<th scope="col"scope="col">Id</th>
				<th scope="col">Valor</th>
				<th scope="col">Descrição</th>

			</tr>
		</thead>
		<tbody>
		@foreach($clientes->vendas as $v)
		<tr>
			<td>{{ $v->id }}</td>
			<td>{{ $v->valor }}</td>
			<td>{{ $v->descricao }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>


@endsection