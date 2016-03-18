<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ValidateContactRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
            'adressemail' => 'required|email',
            'sujet' => 'required|min:5',
            'message' => 'required|min:10'


        ];


    }

        public function messages()
    {
        return [
            'adressemail.required' => 'Veuillez indiquer une adresse mail',
            'adressemail.email' => 'Veuillez entrer une adresse mail valide',
            'sujet.required' => 'Le sujet est obligatoire',
            'sujet.min' => 'Le sujet doit faire au moins cinq caractères',
            'message.required' => 'Veuillez entrer un message',
            'message.min' => 'Votre message doit faire plus de dix caractères'

        ];
    }

}
