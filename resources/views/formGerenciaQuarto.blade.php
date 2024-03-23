@extends('layout')
@section('content')
<section class="container m-5">
  <h1 class="text-center"> Gerenciar dados do quarto </h1>
  <div class="container m-5">
    <form class="row g-3" method="post" action="{{ route('formGerenciaQuarto') }}">
      
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
        <th scope="col"> Valor </th>
        <th scope="col"> Editar </th>
        <th scope="col"> Excluir </th>
      </tr>
    </thead>
    <tbody>
      @foreach($registrosQuarto as $quarto)
      <tr>
        <td scope="row"> {{ $quarto->id }} </td>
        <td> {{ $quarto->numero }} </td>
        <td> {{ $quarto->tipo }} </td>
        <td> {{ $quarto->valor }} </td>
        <td>
        <form method="GET" action="{{ route('alterarQuartoBanco', $quarto->id) }}">
            <button type="button" class="btn btn-primary"> Editar </button>
        </form>
        </td>
        <td>
          <form method="POST" action="{{ route('apagarQuartoBanco', $quarto->id) }}">
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