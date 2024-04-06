@extends('layout')
@section('content')

<section class="container mt-5">
<form class="row g-3" method="put" action="{{route('alterarReservaBanco', $registrosReserva->id)}}">
@method('PUT')
  @csrf
  <div class="col-md-12">
    <label for="inputName" class="form-label"> Nome: </label>
    <input type="text" class="form-control" name="nome" id="inputName" value="{{ old('nome', $registrosClientes->nome)}}" placeholder="Paulo da Silva">
    @error('nome')
      <div class="text-sm-start text-light"> *Preencher o campo nome. </div>
    @enderror
  </div>
  <div class="col-md-12">
    <label for="inputEmail" class="form-label"> Email: </label>
    <input type="email" class="form-control" name="email" id="inputEmail" value="{{ old('nome', $registrosClientes->email)}}" placeholder="paulosilvio@gmail.com">
    @error('email')
      <div class="text-sm-start text-light"> *Preencher o campo e-mail. </div>
    @enderror
  </div>
  <div class="col-3">
    <label for="inputPassword" class="form-label"> Telefone: </label>
    <input type="text" class="form-control" name="fone" id="inputPassword" value="{{ old('nome', $registrosClientes->fone)}}" placeholder="11 1111-1111">
    @error('fone')
      <div class="text-sm-start text-light"> *Preencher o campo telefone. </div>
    @enderror
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary"> Alterar </button>
  </div>
</form>
</section>

@endsection