@extends('layout')
@section('content')

<section class="container mt-5">
<form class="row g-3" method="post" action="{{route('enviaBancoFuncionario')}}">
  @csrf
  <div class="col-md-12">
    <label for="inputNome" class="form-label"> Nome: </label>
    <input type="text" class="form-control" name="nome" id="inputNome">
  </div>
  <div class="col-md-12">
    <label for="inputFuncao" class="form-label"> Função: </label>
    <input type="password" class="form-control" name="funcao" id="inputFuncao">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary"> Cadastrar </button>
  </div>
</form>
</section>

@endsection