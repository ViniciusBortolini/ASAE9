@extends('template')
@section('conteudo')
					<h1>Alterar Cadastro</h1>
					<form method="POST" action="{{ route('cliente_alterar', ['id'=>$c->id]) }}">
						@csrf
						<h6>Nome</h6>
						<input type="text" name="nome" value="{{$c-> nome}}">
						<h6 class="mt-2">CEP</h6>
						<input type="text" name="cep" value="{{$c-> cep}}">
						<h6 class="mt-2">Estado</h6>
						<input type="text" name="estado" value="{{$c-> estado}}">
						<h6 class="mt-2">Cidade</h6>
						<input type="text" name="cidade" value="{{$c-> cidade}}">
						<h6 class="mt-2">Endereco</h6>
						<input type="text" name="endereco" value= "{{$c-> endereco}}">
						<br>
						<input type="submit" class="btn btn-secondary btn-lg mt-3" value="Salvar" class=>
					</form>
@endsection