<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class EditProductRequest extends FormRequest
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
            'name' => 'required|alpha|max:200|' . Rule::unique('products')->ignore($this->Product),
            'country_origin' => 'required|alpha|min:4|max:200',
            'price' => 'required|integer',
            'section_id' => 'required|integer',
            'state_id' => 'required|integer',
        ];  
    }
}
