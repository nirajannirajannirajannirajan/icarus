<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductDetailRequest extends Request
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
            'images'=>'required',
            'menu'=>'required',
            'detail'=>'required',
            'submenu'=>'required',
            'menu_detail'=>'required',

        ];
    }
}
