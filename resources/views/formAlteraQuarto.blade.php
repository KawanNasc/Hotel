@extends('layout')
@section('content')

<section class="container mt-5">
@foreach($registrosQuarto as $quarto)
<form class="row g-3" method="post" action="{{route('alterarQuartoBanco', $quarto->id)}}">
@method('PUT')
  @csrf
  <div class="col-md-12">
    <label for="inputName" class="form-label"> N°: </label>
    <input type="text" class="form-control" name="numero" id="inputNumero" value="{{ old('nome', $quarto->numero)}}">
    @error('numero')
      <div class="text-sm-start text-light"> *Preencher o campo n°. </div>
    @enderror
  </div>
  <div class="col-md-12">
    <label for="inputTipo" class="form-label"> Tipo: </label>
    <!-- <input type="text" class="form-control" name="tipo" id="inputTipo" value="{{ old('nome', $quarto->tipo)}}"> -->
    <select name="tipo" class="form-control" id="inputTipo" value="{{ old('nome', $quarto->tipo)}}">
      <option value="Classe A"> Classe A </option>
      <option value="Comércio"> Comércio </option>
      <option value="Suíte"> Suíte </option>
    </select>
    @error('tipo')
      <div class="text-sm-start text-light"> *Preencher o campo tipo. </div>
    @enderror
  </div>
  <div class="col-3">
    <label for="inputValor" class="form-label"> R$: </label>
    <input type="text" class="form-control" name="valor" id="inputValor" value="{{ old('nome', $quarto->valor)}}" placeholder="1.000,00">
    @error('valor')
      <div class="text-sm-start text-light"> *Preencher o campo de preço. </div>
    @enderror
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary"> Alterar </button>
  </div>
</form>
@endforeach
</section>

@endsection