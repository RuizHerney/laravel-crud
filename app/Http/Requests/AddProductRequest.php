<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
            'name'              => 'required|alpha|unique:products|max:10|min:4',
            'country_origin'    => 'required|alpha|min:4|max:15',
            'price'             => 'required|numeric|min:10|max:200',
            'section_id'        => 'required|numeric|min:1',
        ];
    }
}
