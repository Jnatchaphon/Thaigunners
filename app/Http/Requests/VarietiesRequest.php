<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VarietiesRequest extends FormRequest
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
            'name' => 'required',
            'des' => 'required',
            'detail' => 'required',
            'types' => 'required',
            'image' => 'mimes:jpeg,jpg,png',
        ];
    }

    public function messages() {
        return [
            'name.required' => '- Please Insert Topic',
            'des.required' => '- Please Insert Description',
            'detail.required' => '- Please Insert Detail',
            'types.required' => '- Choose Type',
            'image.mimes' => '- Check Image Type'
        ];
    }
}
