@extends('layout')
@section('content')
<section class="container m-5">
  <h1 class="text-center"> Gerenciar dados do cliente </h1>
  <div class="container m-5">
    <form class="row g-3" method="post" action="{{ route('formGerenciaCliente') }}">
      @csrf
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
        <th scope="col"> Telefone </th>
        <th scope="col"> Editar </th>
        <th scope="col"> Excluir </th>
      </tr>
    </thead>
    <tbody>
      @foreach($registrosClientes as $cliente)
      <tr>
        <td scope="row"> {{ $cliente->id }} </td>
        <td> {{ $cliente->nome }} </td>
        <td> {{ $cliente->email }} </td>
        <td> {{ $cliente->fone }} </td>
        <td>
          <a href="{{ route('mostrarCliente', $cliente->id) }}">
            <button type="submit" class="btn btn-primary"> Editar </button>
          </a>
        </td>
        <td>
          <form method="POST" action="{{ route('apagarClienteBanco', $cliente->id) }}">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger"> Excluir </button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</section>
@endsection
