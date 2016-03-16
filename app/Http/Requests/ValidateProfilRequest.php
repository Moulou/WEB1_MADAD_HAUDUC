<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ValidateProfilRequest extends Request
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
            'name' => 'required|min:5',
            'fonction' => 'required|min:2',
            'adresse' => 'required|min:10',
            'tel' => 'required|min:10',
            'email' => 'required|min:5',
            'password' => 'required|min:5'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Votre Nom est obligatoire',
            'name.min' => 'Nom trop court',
            'fonction.required' => 'Vous devez nous indiquer votre fonction',
            'fonction.min' => 'Le nom de la fonction est trop court',
            'adresse.required' => 'Vous devez nous indiquer votre adresse',
            'adresse.min' => 'L\'adresse est trop courte',
            'tel.required' => 'Vous devez nous indiquer votre numéro de téléphone',
            'tel.min' => 'Le numéro de téléphone est trop court',
            'email.required' => 'L\'adresse email est obligatoire',
            'email.min' => 'L\'adresse email est trop courte',
            'password.required' => 'Vous devez entrer un mot de passe',
            'password.min' => 'Le mot de passe est trop court'
        ];
    }
}
