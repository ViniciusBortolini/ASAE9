@extends ('template')
@section('conteudo')

<h1>Cadastro de Clientes</h1>
<form method="POST" action="{{ route('cliente_add') }}">
	@csrf
	<h6>Nome</h6>
	<input type="text" name="nome" placeholder="Joao Silva">
	<h6 class="mt-2">CEP</h6>
	<input type="text" name="cep" placeholder="89500-000">
	<h6 class="mt-2">Estado</h6>
	<input type="text" name="estado" placeholder="Santa Catarina">
	<h6 class="mt-2">Cidade</h6>
	<input type="text" name="cidade" placeholder="Florianopolis">
	<h6 class="mt-2">Endereco</h6>
	<input type="text" name="endereco" placeholder="Av. Brasil">
	<br>
	<input type="submit" class="btn btn-secondary btn-lg mt-3" value="Cadastrar" class=>
</form>	
@endsection