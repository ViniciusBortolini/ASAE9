@extends ('template')
@section('conteudo')

<h1>Cadastro de Vendas</h1>
<form method="POST" action="{{ route('venda_add') }}">
	@csrf
	<h6 class="mt-2">Cliente</h6>
	<select class="custom-select" name="id_cliente">
		@foreach($clientes as $c)
		<option value="{{ $c->id }}">  {{ $c->id }} {{ $c->nome }} </option>
		@endforeach
	</select>
	
	<br>
	<input type="submit" class="btn btn-secondary btn-lg mt-3" value="Incluir" class=>
</form>
	
@endsection