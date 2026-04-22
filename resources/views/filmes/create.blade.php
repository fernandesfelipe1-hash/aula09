@extends('layouts.default')

@section('conteudo')
  <div class="content-wrapper">
    <section class="content pt-3">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h1 class="h3 mb-0">Novo filme</h1>
          </div>
          <div class="card-body">
            <form action="{{ route('filmes.store') }}" method="POST">
              @include('filmes._form', ['buttonText' => 'Cadastrar'])
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

