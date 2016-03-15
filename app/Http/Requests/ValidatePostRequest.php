<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ValidatePostRequest extends Request
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
            //
            'titre' => 'required|min:10',
            'contenu' => 'required|min:20'


        ];


    }

    public function messages()
    {
        return [
            'titre.required' => 'Le titre de l\'article est obligatoire',
            'contenu.required' => 'Le contenu est obligatoire',
            'contenu.min' => 'Le contenu doit être supérieur à 20 caractères'
        ];
    }
}