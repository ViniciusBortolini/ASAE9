@extends('template')

@section('conteudo')
<h1>Cadastro de itens de vendas #{{$venda->id}}</h1>
<form method="POST" action="{{route('vendas_item_add', ['id'=>$venda->id])}}">
	@csrf
	<h6 class="mt-2">Cliente</h6>
	<select class="custom-select" name="id_produto">
		@foreach($produtos as $p)
		<option value="{{ $p->id }}">{{ $p->nome }} </option>
		@endforeach
	</select>
	<h6 class="mt-2">Quantidade</h6>
	<input type="number" name="quantidade" class="form-control" min="0" step="0.01">
	<input type="submit" class="btn btn-secondary btn-lg mt-3" value="Incluir" class=>
</form>
<h2>Itens Cadastrados</h2>
<div class="table-responsive">
	<table class="table table-striped table-dark"> 
			<thead>
		<tr>
			<th>ID Item</th>
			<th>Nome</th>
			<th>Quantidade</th>
			<th>Valor unitário</th>
			<th>Subtotal</th>
			<th>Data</th>
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
			<td>{{ $p->pivot->created_at }}</td>
			<td><a href="#" class="btn btn-danger" onclick="exclui({{
				$p->pivot->id }})">Remover</a></td>
		</tr>
		@endforeach
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td><b>Total:</b></td>
			<td><b>{{ $venda->valor }}</b></td>
			<td></td>
			<td></td>
		</tr>
	</tbody>
</table>
<a class="btn btn-primary" href="{{ route('venda_listar') }}">Fechar venda</a>

<script>
	function exclui(id){
		if (confirm("Deseja excluir o item de id: " + id + "?")){
			location.href = "/venda/{{ $venda->id }}/itens/remover/" + id;
		}
	}
</script>

@endsection