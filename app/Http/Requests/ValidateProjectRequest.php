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
            'tel' => 'required|min:10',
            'fiche_identite' => 'required',
            'type' => 'required',
            'contexte' => 'required',
            'demande' => 'required',
            'objectif' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'nom_projet.required' => 'Le nom du projet est obligatoire',
            'name.required'      => 'Le nom du contact doit être supérieur à 3 caractères',
            'fonction.required'  => 'La fonction est obligatoire',
            'adresse.required'   => 'L\'adresse est obligatoire',
            'email.required'     => 'L\'adresse email est obligatoire',
            'tel.required'       => 'Un numéro de téléphone est obligatoire',
            'tel.min'            => 'Veuillez entrer un numéro de téléphone valide',
            'type.required'      => 'Le type du projet est obligatoire',
            'fiche_identite.required' => 'Une fiche d\'identité est obligatoire',
            'contexte.required' => 'Veuillez indiquer le contexte de votre demande',
            'demande.required' => 'Veuillez inscrire votre demande',
            'objectif.required' => 'Veuillez indiquer vos objectifs',


        ];
    }
}
