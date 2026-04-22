@csrf

<div class="form-group">
  <label for="titulo">Título</label>
  <input type="text" name="titulo" id="titulo" class="form-control @error('titulo') is-invalid @enderror" value="{{ old('titulo', data_get($filme ?? null, 'titulo', '')) }}">
  @error('titulo')
    <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>

<div class="form-row">
  <div class="form-group col-md-4">
    <label for="genero">Gênero</label>
    <input type="text" name="genero" id="genero" class="form-control @error('genero') is-invalid @enderror" value="{{ old('genero', data_get($filme ?? null, 'genero', '')) }}">
    @error('genero')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group col-md-4">
    <label for="diretor">Diretor</label>
    <input type="text" name="diretor" id="diretor" class="form-control @error('diretor') is-invalid @enderror" value="{{ old('diretor', data_get($filme ?? null, 'diretor', '')) }}">
    @error('diretor')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group col-md-4">
    <label for="ano_lancamento">Ano de lançamento</label>
    <input type="number" name="ano_lancamento" id="ano_lancamento" class="form-control @error('ano_lancamento') is-invalid @enderror" value="{{ old('ano_lancamento', data_get($filme ?? null, 'ano_lancamento', '')) }}">
    @error('ano_lancamento')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
</div>

<div class="form-row">
  <div class="form-group col-md-4">
    <label for="duracao_minutos">Duração em minutos</label>
    <input type="number" name="duracao_minutos" id="duracao_minutos" class="form-control @error('duracao_minutos') is-invalid @enderror" value="{{ old('duracao_minutos', data_get($filme ?? null, 'duracao_minutos', '')) }}">
    @error('duracao_minutos')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group col-md-4 d-flex align-items-center mt-4 pt-2">
    <div class="form-check">
      <input type="hidden" name="assistido" value="0">
      <input type="checkbox" name="assistido" id="assistido" class="form-check-input" value="1" {{ old('assistido', data_get($filme ?? null, 'assistido', false)) ? 'checked' : '' }}>
      <label class="form-check-label" for="assistido">Assistido</label>
    </div>
  </div>
</div>

<div class="form-group">
  <label for="sinopse">Sinopse</label>
  <textarea name="sinopse" id="sinopse" rows="5" class="form-control @error('sinopse') is-invalid @enderror">{{ old('sinopse', data_get($filme ?? null, 'sinopse', '')) }}</textarea>
  @error('sinopse')
    <div class="invalid-feedback d-block">{{ $message }}</div>
  @enderror
</div>

<div class="d-flex justify-content-between">
  <a href="{{ route('filmes.index') }}" class="btn btn-secondary">Voltar</a>
  <button type="submit" class="btn btn-primary">{{ $buttonText ?? 'Salvar' }}</button>
</div>
