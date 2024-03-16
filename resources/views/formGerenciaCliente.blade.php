@extends('layout')
@section('content')
<section class="container m-5">
  <h1 class="text-center"> Gerenciar dados do cliente </h1>
  <div class="container m-5">
    <form class="row g-3" method="post" action="{{route('formGerenciaCliente')}}">
      
      <div class="row center">
        <div class="col">
          <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o nome do cliente" aria-label="First name">
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
        <th scope="col"> Nome </th>
        <th scope="col"> E-Mail </th>
        <th scope="col"> Editar </th>
        <th scope="col"> Excluir</th>
      </tr>
    </thead>
    <tbody>
      @foreach($registrosClientes as $registrosClientesLoop)
      <tr>
        <th scope="row">{{$registrosClientesLoop->$id}}</th>
        <td>{{$registrosClientesLoop->$nome}}</td>
        <td>{{$registrosClientesLoop->$email}}</td>
        <td>
          <a href="">
            <button type="button" class="btn btn-primary">X</button>
          </a>
        </td>
        <td>
          <form method="POST" action="{{route('apagarClienteBanco, $registrosClientesLoop->id')}}">
            @method('delete')
            @csrf
            <button type="submit" class=""> X </button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</section>
@endsection