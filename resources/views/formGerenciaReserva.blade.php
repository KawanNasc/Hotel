@extends('layout')
@section('content')
<section class="container m-5">
  <h1 class="text-center"> Gerenciar dados da reserva </h1>
  <div class="container m-5">
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
        <th scope="col"> Nome do cliente </th>
        <th scope="col"> Código da reserva </th>
        <th scope="col"> Editar </th>
        <th scope="col"> Excluir </th>
      </tr>
    </thead>
    <tbody>
     
      <tr>
        <td></td>
        <td></td>
        <td></td>
      </tr>
   
    </tbody>
  </table>

</section>
@endsection