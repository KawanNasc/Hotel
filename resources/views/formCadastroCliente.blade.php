@extends('layout')
@section('content')

<section class="container mt-5">
<form class="row g-3" method="post" action="{{route('enviaBancoCliente')}}">
  @csrf
  <div class="col-md-12">
    <label for="inputName" class="form-label"> Nome: </label>
    <input type="text" class="form-control" name="nome" id="inputName" placeholder="Paulo da Silva">
  </div>
  <div class="col-md-12">
    <label for="inputEmail" class="form-label"> Email: </label>
    <input type="email" class="form-control" name="email" id="inputEmail" placeholder="paulosilvio@gmail.com">
  </div>
  <div class="col-3">
    <label for="inputPassword" class="form-label"> Telefone: </label>
    <input type="text" class="form-control" name="fone" id="inputPassword" placeholder="11 1111-1111">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary"> Cadastrar </button>
  </div>
</form>
</section>

@endsection