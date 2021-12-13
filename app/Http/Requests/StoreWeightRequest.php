<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class StoreWeightRequest extends FormRequest
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
            'peso' => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/|',
        ];
    }

    public function messages()
    {
        return [
            'peso.required' => 'El :attribute es obligatorio.',
            'peso.numeric' => 'El :attribute debe ser un número, la separación decimal es con un punto. (ejemplo: 60.5)',
            'peso.regex' => 'El :attribute debe ser un número entero o decimal.',
            
        ];
    }
}
