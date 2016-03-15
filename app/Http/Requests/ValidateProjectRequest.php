<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ValidateProjectRequest extends Request
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
            'nom_projet' => 'required|min:5',
            'name' => 'required|min:3',
            'fonction' => 'required|min:5',
            'adresse' => 'required|min:5',
            'email' => 'required|min:5',

        ];
    }

    public function messages()
    {
        return [
            'nom_projet.required' => 'Le nom du projet est obligatoire',
            'name.required'      => 'Votre nom doit être supérieur à 3 caractères',
            'fonction.required' => 'Votre fonction est obligatoire',
            'adresse.required'      => 'L\'adresse est obligatoire',
        ];
    }
}
