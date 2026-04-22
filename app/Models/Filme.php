<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'genero',
        'diretor',
        'ano_lancamento',
        'duracao_minutos',
        'sinopse',
        'assistido',
    ];

    protected $casts = [
        'assistido' => 'boolean',
    ];
}
