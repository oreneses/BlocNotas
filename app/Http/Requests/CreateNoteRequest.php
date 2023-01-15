<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateNoteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'text' => 'required|min:10',
            'creation_date' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'La nota es obligatoria.',
            'text.required' => 'La descripción de la nota es obligatoria.',
            'text.min' => 'La descripción debe tener mínimo 10 carácteres'
        ];
    }
}
