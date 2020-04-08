@extends('template')
@section('conteudo')
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
				<th scope="col">Operações</th>
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
				<td>
					<a class="btn btn-warning" href="{{route('cliente_tela_alterar', ['id'=>$c->id])}}"> Alterar</a>
					<a class="btn btn-danger" href="#" onclick="exclui({{$c->id}})">Excluir</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
<script>
	function exclui(id){
		if (confirm("Deseja excluir o usuário de id: " + id + "?")){
			location.href = "/cliente/excluir/" + id;
		}
	}
</script>
@endsection