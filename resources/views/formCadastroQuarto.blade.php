@extends('layout')
@section('content')

<section class="container mt-5">
<form class="row g-3" method="post" action="{{route('enviaBancoQuarto')}}">
  @csrf
  <div class="col-md-12">
    <label for="inputName" class="form-label"> N°: </label>
    <input type="number" class="form-control" name="numero" id="inputNumero" placeholder="1">
  </div>
  <div class="col-md-12">
    <label for="inputEmail" class="form-label"> Tipo: </label>
    <select name="tipo" id="inputTipo" class="form-control">
      <option value="Classe A"> Classe A </option>
      <option value="Comércio"> Comércio </option>
      <option value="Suíte"> Suíte </option>
    </select>
  </div>
  <div class="col-3">
    <label for="inputPassword" class="form-label"> R$: </label>
    <input type="number" class="form-control" name="valor" id="inputValor" placeholder="1.000,00">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary"> Cadastrar </button>
  </div>
</form>
</section>

@endsection