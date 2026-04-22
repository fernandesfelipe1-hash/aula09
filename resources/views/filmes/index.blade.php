@extends('layouts.default')

@section('conteudo')
  <div class="content-wrapper">
    <section class="content pt-3">
      <div class="container-fluid">
        <div class="row mb-3">
          <div class="col-12 d-flex justify-content-between align-items-center">
            <h1 class="h3 mb-0">Filmes</h1>
            <a href="{{ route('filmes.create') }}" class="btn btn-primary">
              <i class="fas fa-plus mr-1"></i> Novo filme
            </a>
          </div>
        </div>

        @if (session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card">
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-striped mb-0">
                <thead>
                  <tr>
                    <th>Título</th>
                    <th>Gênero</th>
                    <th>Diretor</th>
                    <th>Ano</th>
                    <th>Duração</th>
                    <th>Assistido</th>
                    <th class="text-right">Ações</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($filmes as $filme)
                    <tr>
                      <td>{{ $filme->titulo }}</td>
                      <td>{{ $filme->genero ?: '-' }}</td>
                      <td>{{ $filme->diretor }}</td>
                      <td>{{ $filme->ano_lancamento }}</td>
                      <td>{{ $filme->duracao_minutos ? $filme->duracao_minutos . ' min' : '-' }}</td>
                      <td>
                        @if ($filme->assistido)
                          <span class="badge badge-success">Sim</span>
                        @else
                          <span class="badge badge-secondary">Não</span>
                        @endif
                      </td>
                      <td class="text-right">
                        <a href="{{ route('filmes.show', $filme) }}" class="btn btn-sm btn-info">Ver</a>
                        <a href="{{ route('filmes.edit', $filme) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('filmes.destroy', $filme) }}" method="POST" class="d-inline" onsubmit="return confirm('Deseja remover este filme?')">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                        </form>
                      </td>
                    </tr>
                  @empty
                    <tr>
                      <td colspan="7" class="text-center py-4">Nenhum filme cadastrado.</td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer clearfix">
            {{ $filmes->links() }}
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

