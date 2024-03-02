@extends('layout');
@section('content');

<section class="container mt-5">
    <h1> Reserva de Quarto </h1>
<form class="row g-3" method="post" action="{{route('enviaBancoReserva')}}">
  @csrf
  <div class="col-md-12">
    <label for="inputIdFuncionario" class="form-label"> Digite o cod. do funcionário: </label>
    <input type="number" class="form-control" name="idfuncionario" id="inputIdFuncionario" placeholder="1">
  </div>
  <div class="col-md-12">
    <label for="inputNmFuncionario" class="form-label"> Nome do funcionário: </label>
    <input type="text" class="form-control" name="nome" id="inputNmFuncionario" placeholder="Funcionário">
  </div>
  <div class="col-md-12">
    <label for="inputIdCliente" class="form-label"> Digite o cod. do cliente: </label>
    <input type="number" class="form-control" name="idcliente" id="inputIdCliente" placeholder="1">
  </div>
  <div class="col-md-12">
    <label for="inputNmCliente" class="form-label"> Nome do cliente: </label>
    <input type="text" class="form-control" name="nome" id="inputNmCliente" placeholder="Cliente">
  </div>
  <div class="col-3">
    <label for="inputIdQuarto" class="form-label"> Digite o n° do quarto: </label>
    <input type="number" class="form-control" name="idquarto" id="inputIdQuarto" placeholder="1">
  </div>
  <div class="col-md-12">
    <label for="inputTipo" class="form-label"> Tipo: </label>
    <select name="tipo" id="inputTipo">
      <option value="classea"> Classe A </option>
      <option value="comercio"> Comércio </option>
      <option value="suite"> Suíte </option>
    </select>
  </div>
  <div class="col-3">
    <label for="inputValorTotal" class="form-label"> Valor da Diária: </label>
    <input type="number" class="form-control" name="valorTotal" id="inputValorTotal" placeholder="1.000,00">
  </div>
  <div class="col-3">
    <label for="inputDtEntrada" class="form-label"> Data da entrada: </label>
    <input type="date" class="form-control" name="dataEntrada" id="inputDtEntrada">
  </div>
  <div class="col-3">
    <label for="inputDtSaida" class="form-label"> Data da saída: </label>
    <input type="date" class="form-control" name="dataSaida" id="inputDtSaida">
  </div>
  <div class="col-md-12">
    <label for="inputTipo" class="form-label"> Situação do pagamento: </label>
    <select name="tipo" id="inputTipo">
      <option value="pago"> Pago </option>
      <option value="pendente"> Pendente </option>
    </select>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary"> Cadastrar </button>
  </div>
</form>
</section>

@endsection