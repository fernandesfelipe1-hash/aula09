@extends('layouts.default')

@section('conteudo')
  <div class="content-wrapper">
    <section class="content pt-3">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h1 class="h3 mb-0">Editar filme</h1>
          </div>
          <div class="card-body">
            <form action="{{ route('filmes.update', $filme) }}" method="POST">
              @method('PUT')
              @include('filmes._form', ['buttonText' => 'Atualizar', 'filme' => $filme])
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

