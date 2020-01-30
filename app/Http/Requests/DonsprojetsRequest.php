<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DonsprojetsRequest extends FormRequest
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
            'nom' => 'required|min:5|max:20|alpha',
            'prenom' => 'required|max:30|alpha',
			'email' => 'required|email',
            'adresse' => 'required|max:250',
            'telephone'=>'required|numeric|regex:/[0-9]{7,15}/', 
            'montant'=>'required|decimal',
            'is_ano'=>'boolean',
        ];
    }
}
