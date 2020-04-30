
@extends('template')
@section('conteudo')


<h1>Itens da Venda #{{$venda->id}}</h1>

<div class="table-responsive">
	<table class="table table-striped table-dark">

		Cliente: 
		<thead>
			<tr>
				<th scope="col"scope="col">Id Item</th>
				<th scope="col">Nome</th>
				<th scope="col">Quantidade</th>
				<th scope="col">Valor Unitario</th>
				<th scope="col">Data</th>
				<th>Operações</th>

			</tr>
		</thead>
		<tbody>
		@foreach($venda->produtos as $p)
		<tr>
			<td>{{ $p->pivot->id }}</td>
			<td>{{ $p->nome }}</td>
			<td>{{ $p->pivot->quantidade }}</td>
			<td>{{ $p->preco }}</td>
			<td>{{ $p->pivot->subtotal }}</td>
			<td>{{ $p->pivot->created_at}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>


@endsection