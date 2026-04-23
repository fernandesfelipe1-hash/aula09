<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilmeRequest;
use Illuminate\Http\Request;
use App\Models\Filme;
use Illuminate\Support\Facades\Log;

class FilmeController extends Controller
{
    public function index()
    {
        $filmes = Filme::orderBy('titulo')->paginate(10);

        return view('filmes.index', compact('filmes'));
    }

    public function create()
    {
        return view('filmes.create');
    }

    public function store(FilmeRequest $request)
    {
        Log::error('deu erro');
        
        $valid = $request->validated();

        Filme::create($valid);
        // Filme::create($request->all());;

        return redirect()
            ->route('filmes.index')
            ->with('success', 'Filme cadastrado com sucesso.');
    }

    public function show(Filme $filme)
    {
        return view('filmes.show', compact('filme'));
    }

    public function edit(Filme $filme)
    {
        return view('filmes.edit', compact('filme'));
    }

    public function update(FilmeRequest $request, Filme $filme)
    {
        $valid = $request->validated();
        $filme->update($valid);

        return redirect()
            ->route('filmes.index')
            ->with('success', 'Filme atualizado com sucesso.');
    }

    public function destroy(Filme $filme)
    {
        $filme->delete();

        return redirect()
            ->route('filmes.index')
            ->with('success', 'Filme removido com sucesso.');
    }
}
