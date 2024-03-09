@extends('layout')
@section('content')
<section class="container m-5">
  <div class="container m-5">
    <form class="row g-3" method="post" action="{{route('enviaBancoReserva')}}">
      <div class="row center">
        <div class="col">
          <input type="text" id="marca" name="marca" class="form-control" placeholder="Digite o nome" aria-label="First name">
        </div>
        <div class="col">
          <button type="submit" class="btn btn-info"> Buscar </button>
        </div>
      </div>
    </form>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col"> Código </th>
        <th scope="col"> Nome do cliente </th>
        <th scope="col"> Código da reserva </th>
      </tr>
    </thead>
    <tbody>
     
      <tr>
        <th scope="row">01</th>
        <td>119897-999</td>
        <td>Samsung</td>
        <td>
          <a href="">
            <button type="button" class="btn btn-primary">X</button>
          </a>
        </td>
        xx
        <td>
         xxx
        </td>
      </tr>
   
    </tbody>
  </table>

</section>
@endsection