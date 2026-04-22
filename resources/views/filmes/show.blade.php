@extends('layouts.default')

@section('conteudo')
  <div class="content-wrapper">
    <section class="content pt-3">
      <div class="container-fluid">
        @if (session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h1 class="h3 mb-0">{{ $filme->titulo }}</h1>
            <div>
              <a href="{{ route('filmes.edit', $filme) }}" class="btn btn-warning btn-sm">Editar</a>
              <a href="{{ route('filmes.index') }}" class="btn btn-secondary btn-sm">Voltar</a>
            </div>
          </div>
          <div class="card-body">
            <dl class="row mb-0">
              <dt class="col-sm-3">Gênero</dt>
              <dd class="col-sm-9">{{ $filme->genero ?: '-' }}</dd>

              <dt class="col-sm-3">Diretor</dt>
              <dd class="col-sm-9">{{ $filme->diretor }}</dd>

              <dt class="col-sm-3">Ano de lançamento</dt>
              <dd class="col-sm-9">{{ $filme->ano_lancamento }}</dd>

              <dt class="col-sm-3">Duração</dt>
              <dd class="col-sm-9">{{ $filme->duracao_minutos ? $filme->duracao_minutos . ' minutos' : '-' }}</dd>

              <dt class="col-sm-3">Assistido</dt>
              <dd class="col-sm-9">{{ $filme->assistido ? 'Sim' : 'Não' }}</dd>

              <dt class="col-sm-3">Sinopse</dt>
              <dd class="col-sm-9">{{ $filme->sinopse ?: '-' }}</dd>
            </dl>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

