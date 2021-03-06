<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentprojetRequest extends FormRequest
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
            'nom' => 'required|min:3|max:15|alpha',
			'email' => 'required|email',
            'commentaire' => 'required|max:300',
        ];
    }
}
