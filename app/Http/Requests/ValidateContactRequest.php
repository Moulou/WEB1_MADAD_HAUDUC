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
            'nom' => 'required',
            'sujet' => 'required|min:5',
            'message' => 'required|min:10'


        ];


    }

        public function messages()
    {
        return [
            'nom.required' => 'Veuillez indiquer votre nom',
            'sujet.required' => 'Le sujet est obligatoire',
            'sujet.min' => 'Le sujet doit faire au moins cinq caractères',
            'message.required' => 'Veuillez entrer un message',
            'message.min' => 'Votre message doit faire plus de dix caractères'

        ];
    }

}
