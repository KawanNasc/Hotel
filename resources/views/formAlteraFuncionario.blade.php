@extends('layout')
@section('content')

<section class="container mt-5">
<form class="row g-3" method="post" action="{{route('alterarFuncionarioBanco', $registrosFuncionarios->id)}}">
@method('PUT')
  @csrf
  <div class="col-md-12">
    <label for="inputName" class="form-label"> Nome: </label>
    <input type="text" class="form-control" name="nome" id="inputName" value="{{old, ('nome', $registrosFuncionarios->nome)}}">
    @error('nome')
      <div class="text-sm-start text-light"> *Preencher o campo nome. </div>
    @enderror
  </div>
  <div class="col-md-12">
    <label for="inputEmail" class="form-label"> Função: </label>
    <input type="email" class="form-control" name="funcao" id="inputFuncao" value="{{old, ('nome', $registrosFuncionarios->funcao)}}">
    @error('funcao')
      <div class="text-sm-start text-light"> *Preencher o campo função. </div>
    @enderror
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary"> Cadastrar </button>
  </div>
</form>
</section>

@endsection