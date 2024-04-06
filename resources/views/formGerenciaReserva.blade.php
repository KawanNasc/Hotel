@extends('layout')
@section('content')
<section class="container m-5">
  <h1 class="text-center"> Gerenciar dados da reserva </h1>
  <div class="container m-5">
  <form class="row g-3" method="post" action="{{ route('formGerenciaReserva') }}">
    @csrf
    <form class="row g-3" method="post">
      <div class="row center">
        <div class="col">
          <input type="text" id="marca" name="marca" class="form-control" placeholder="Digite o nome" aria-label="First name">
        </div>
      </div>
    </form>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col"> Código </th>
        <th scope="col"> Código do cliente </th>
        <th scope="col"> Código do funcionario </th>
        <th scope="col"> Código do quarto </th>
        <th scope="col"> Situação </th>
        <th scope="col"> Valor total </th>
        <th scope="col"> Entrada </th>
        <th scope="col"> Saída </th>
      </tr>
    </thead>
    <tbody>
      @foreach($registrosReserva as $reserva)
      <tr>
        <td scope="row"> {{ $reserva->id }} </td>
        <td> {{ $reserva->idcliente }} </td>
        <td> {{ $reserva->idfuncionario }} </td>
        <td> {{ $reserva->idquarto }} </td>
        <td> {{ $reserva->situacao }} </td>
        <td> {{ $reserva->valorTotal }} </td>
        <td> {{ $reserva->dataEntrada }} </td>
        <td> {{ $reserva->dataSaida }} </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</section>
@endsection