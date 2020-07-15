<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NextmatchRequest extends FormRequest
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
            'league' => 'required',
            'homenm' => 'required',
            'imagehome' => 'mimes:jpeg,jpg,png',
            'awaynm' => 'required',
            'imageaway' => 'mimes:jpeg,jpg,png',
            'des' => 'required'
        ];
    }

    public function messages() {
        return [
            'league.required' => '- Please Insert League Name',
            'homenm.required' => '- Please Insert Team',
            'awaynm.required' => '- Please Insert Team',
            'des.required' => '- Please Insert Description',
            'imagehome.mimes' => '- Check Image Type',
            'imageaway.mimes' => '- Check Image Type'
        ];
    }
}
