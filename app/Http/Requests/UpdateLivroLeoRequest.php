<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateLivroLeoRequest extends FormRequest
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
        $id = $this->route('livrosleo')->id;
        return [
            'titulo' => 'required',
            'autor'  => 'required', 
            'isbn'   => 'required|unique:livros_leo,isbn,' . $id 
        ];
    }

    public function messages()
    {   return[
            'titulo.required'=> 'Digite um titulo',
            'autor.required' => 'Digite um autor',
            'isbn.required'  => 'Digite um isbn',
            'isbn.unique'    => 'Já existe um livro com este isbn'
    ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'isbn' => preg_replace('/[^0-9]/', '', $this->isbn),
        ]);
    }
}
