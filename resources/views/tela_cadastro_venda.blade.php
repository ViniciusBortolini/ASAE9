@extends ('template')
@section('conteudo')

<h1>Cadastro de Vendas</h1>
<form method="POST" action="{{ route('venda_add') }}">
	@csrf
	<h6 class="mt-2">Cliente</h6>
	<select class="custom-select" name="id_cliente">
		@foreach(App\Clientes::all() as $c)
		<option value="{{ $c->id }}">  {{ $c->id }} {{ $c->nome }} </option>
		@endforeach
	</select>
	<h6 class="mt-2">Descrição</h6>
	<input type="text" name="descricao" placeholder="...">
	<h6 class="mt-2">Valor</h6>
	<input type="text" name="valor" placeholder="R$">
	<br>
	<input type="submit" class="btn btn-secondary btn-lg mt-3" value="Incluir" class=>
</form>
	
@endsection