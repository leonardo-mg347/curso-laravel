<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreLivroLeoRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'titulo' => 'required',
            'autor'  => 'nullable', 
            'isbn'   => 'required|unique:livros_leo,isbn'
        ];
    }

    public function messages()
    {   return[
            'isbn.unique' => 'Já tem esse livro aqui sabichão!!!',
            'titulo.required'=> 'Digite um titulo',
            'isbn.required'=> 'Digite um isbn'
    ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'isbn' => preg_replace('/[^0-9]/', '', $this->isbn),
        ]);
    }
}
