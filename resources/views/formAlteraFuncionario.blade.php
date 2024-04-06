@extends('layout')
@section('content')

<section class="container mt-5">
@foreach($registrosFuncionarios as $funcionario)
<form class="row g-3" method="post" action="{{route('alterarFuncionarioBanco', $funcionario->id)}}">
  @method('PUT')
  @csrf
  <div class="col-md-12">
    <label for="inputName" class="form-label"> Nome: </label>
    <input type="text" class="form-control" name="nome" id="inputName" value="{{ old('nome', $funcionario->nome)}}">
    @error('nome')
      <div class="text-sm-start text-light"> *Preencher o campo nome. </div>
    @enderror
  </div>
  <div class="col-md-12">
    <label for="inputFuncao" class="form-label"> Função: </label>
    <input type="text" class="form-control" name="funcao" id="inputFuncao" value="{{ old('nome', $funcionario->funcao)}}">
    @error('funcao')
      <div class="text-sm-start text-light"> *Preencher o campo função. </div>
    @enderror
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary"> Alterar </button>
  </div>
</form>
@endforeach
</section>

@endsection