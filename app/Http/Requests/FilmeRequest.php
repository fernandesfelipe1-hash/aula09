<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return !false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $date = (int) date('Y');
        return [
            'titulo' => 'required|max:96',
            'genero' => 'required|max:32|in:comedia',
            'diretor' => 'regex:/^\D+$/',
            'ano_lancamento' => "required|integer|min:1888|max:{$date}",
            'duracao_minutos' => 'required|integer|min:10|max:600',
            'assistido' => 'boolean',
            'sinopse' => 'max:150',
        ];
    }


    public function messages() {
        return [
            'titulo' => 'required|max:96',
            'genero' => 'required|max:32|in:comedia',
            'diretor' => 'regex:/^\D+$/',
            'ano_lancamento' => "teste",
            'duracao_minutos' => 'required|integer|min:10|max:600',
            'assistido' => 'boolean',
            'sinopse' => 'max:150',
        ];
    }
}
