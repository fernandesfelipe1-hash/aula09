<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filme;

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

    public function store(Request $request)
    {
        $date = (int) date('Y');
        
        $valid = $request->validate([    
            'titulo' => 'required|max:96',
            'genero' => 'required|max:32|in:comedia',
            'diretor' => 'regex:/^\D+$/',
            'ano_lancamento' => "required|integer|min:1888|max:{$date}",
            'duracao_minutos' => 'required|min:10|max:600',
            'assistido' => 'boolean',
            'sinopse' => 'max:150',
        ]);

        Filme::create($request->all());
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

    public function update(Request $request, Filme $filme)
    {
        $filme->update($request->all());

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
