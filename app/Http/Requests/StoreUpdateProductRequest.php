<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProductRequest extends FormRequest
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
            'name' => 'required|min:3|max:255',
            'description' => 'nullable|min:3|max:10000',
            'photo' => 'required|image',
            //
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nome é obrigatorio',
            'name.min' => 'Ops! Precisa inforar pelo menos 3 caracteres no nome',
            'photo.required' => 'Escolher uma imagem para fazer o upload',
        ];

    }
}
