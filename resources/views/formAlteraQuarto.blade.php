@extends('layout')
@section('content')

<section class="container mt-5">
<form class="row g-3" method="put" action="{{route('alterarQuartoBanco', $registrosQuarto->id)}}">
@method('PUT')
  @csrf
  <div class="col-md-12">
    <label for="inputName" class="form-label"> N°: </label>
    <input type="text" class="form-control" name="numero" id="inputNumero" value="{{old, ('nome', $registrosQuarto->numero)}}">
    @error('numero')
      <div class="text-sm-start text-light"> *Preencher o campo n°. </div>
    @enderror
  </div>
  <div class="col-md-12">
    <label for="inputEmail" class="form-label"> Tipo: </label>
    <input type="email" class="form-control" name="tipo" id="inputTipo" value="{{old, ('nome', $registrosQuarto->tipo)}}">
    @error('tipo')
      <div class="text-sm-start text-light"> *Preencher o campo tipo. </div>
    @enderror
  </div>
  <div class="col-3">
    <label for="inputPassword" class="form-label"> R$: </label>
    <input type="text" class="form-control" name="valor" id="inputValor" value="{{old, ('nome', $registrosQuarto->valor)}}">
    @error('valor')
      <div class="text-sm-start text-light"> *Preencher o campo de preço. </div>
    @enderror
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary"> Cadastrar </button>
  </div>
</form>
</section>

@endsection