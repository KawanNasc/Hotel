@extends('layout')
@section('content')

<section class="container mt-5">
@foreach($registrosClientes as $cliente)
<form class="row g-3" method="post" action="{{ route('alterarClienteBanco', $cliente->id) }}">
  @method('PUT')
  @csrf
  <div class="col-md-12">
    <label for="inputName" class="form-label"> Nome: </label>
    <input type="text" class="form-control" name="nome" id="inputName" value="{{ old('nome', $cliente->nome) }}" placeholder="Paulo da Silva">
    @error('nome')
      <div class="text-sm-start text-light"> *Preencher o campo nome. </div>
    @enderror
  </div>
  <div class="col-md-12">
    <label for="inputEmail" class="form-label"> Email: </label>
    <input type="email" class="form-control" name="email" id="inputEmail" value="{{ old('nome', $cliente->email) }}" placeholder="paulosilvio@gmail.com">
    @error('email')
      <div class="text-sm-start text-light"> *Preencher o campo e-mail. </div>
    @enderror
  </div>
  <div class="col-3">
    <label for="inputPassword" class="form-label"> Telefone: </label>
    <input type="text" class="form-control" name="fone" id="inputFone" value="{{ old('nome', $cliente->fone) }}" placeholder="11 1111-1111">
    @error('fone')
      <div class="text-sm-start text-light"> *Preencher o campo telefone. </div>
    @enderror
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary"> Alterar </button>
  </div>
</form>
@endforeach
</section>

@endsection