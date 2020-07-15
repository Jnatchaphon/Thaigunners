<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeaguetableRequest extends FormRequest
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
            'pos' => 'required',
            'play' => 'required',
            'win' => 'required',
            'draw' => 'required',
            'lost' => 'required',
            'gf' => 'required',
            'ga' => 'required',
            'gd' => 'required',
            'pts' => 'required'
        ];
    }

    public function messages() {
        return [
            'pos.required' => '- Please Insert Position',
            'play.required' => '- Please Insert Play Match',
            'win.required' => '- Please Insert Win',
            'draw.required' => '- Please Insert Draw',
            'lost.required' => '- Please Insert Lost',
            'gf.required' => '- Please Insert GF',
            'ga.required' => '- Please Insert GA',
            'gd.required' => '- Please Insert GD',
            'pts.required' => '- Please Insert PTS'
        ];
    }
}
