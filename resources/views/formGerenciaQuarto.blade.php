@extends('layout')
@section('content')
<section class="container m-5">
  <h1 class="text-center"> Gerenciar dados do quarto </h1>
  <div class="container m-5">
    <form class="row g-3" method="post" action="{{route('enviaBancoFuncionario')}}">
      
      <div class="row center">
        <div class="col">
          <input type="text" id="id" name="nome" class="form-control" placeholder="Digite o nome do quarto" aria-label="First name">
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
        <th scope="col"> N° </th>
        <th scope="col"> Tipo </th>
        <th scope="col"> Editar </th>
        <th scope="col"> Excluir </th>
      </tr>
    </thead>
    <tbody>
     
      <tr>
        <td>
          <a href="">
            <button type="button" class="btn btn-primary">X</button>
          </a>
        </td>
        <td>
         xxx
        </td>
      </tr>
   
    </tbody>
  </table>

</section>
@endsection