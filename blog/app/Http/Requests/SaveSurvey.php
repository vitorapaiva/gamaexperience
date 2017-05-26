<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveSurvey extends FormRequest
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
            'email' => 'required|email|unique:survey',
            'nome' => 'required',
            'como_ajudaria' => 'required',
            'utiliza_credito' => 'required',
            'sonho_proprio' => 'required',
            'bem_proprio' => 'required'
        ];
    }
}
