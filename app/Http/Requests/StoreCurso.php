<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|min:3',
            'descripcion' => 'required|min:10',
            'categoria' => 'required|min:3',
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required' => 'El nombre del curso es obligatorio.',
            'nombre.min' => 'El nombre del curso debe tener al menos :min caracteres.',
            'descripcion.required' => 'La descripción del curso es obligatoria.',
            'descripcion.min' => 'La descripción del curso debe tener al menos :min caracteres.',
            'categoria.required' => 'La categoría del curso es obligatoria.',
            'categoria.min' => 'La categoría del curso debe tener al menos :min caracteres.',
        ];
    }
}
