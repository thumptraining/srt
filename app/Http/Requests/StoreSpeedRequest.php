<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSpeedRequest extends FormRequest
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
            'distance' => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/|',
            'hours' => 'required|numeric|regex:/^[\d]{0,2}?$/|',
            'minute' => 'required|numeric|regex:/^[\d]{0,2}?$/|',
            'seconds' => 'required|numeric|regex:/^[\d]{0,2}?$/|',
            'pminute' => 'required|numeric|regex:/^[\d]{0,2}?$/|',
            'pseconds' => 'required|numeric|regex:/^[\d]{0,2}?$/|',
        ];
    }

    public function messages()
    {
        return [
            'distance.required' => 'La distancia es obligatoria.',
            'distance.numeric' => 'La distancia debe ser un número, la separación decimal es con un punto. (ejemplo: 60.5)',
            'distance.regex' => 'La distancia debe ser un número entero o decimal.',

            'hours.required' => 'La hora es obligatorio.',
            'hours.numeric' => 'La hora debe ser un número entero',
            'hours.regex' => 'La hora debe ser un número entero positivo',

            'minute.required' => 'Los minutos son obligatorio.',
            'minute.numeric' => 'Los minutos deben ser un número entero',
            'minute.regex' => 'Los minutos deben ser un número entero positivo',

            'seconds.required' => 'Los segundos son obligatorio.',
            'seconds.numeric' => 'Los segundos deben ser un número entero',
            'seconds.regex' => 'Los segundos deben ser un número entero positivo',

            'pminute.required' => 'Los minutos son obligatorio.',
            'pminute.numeric' => 'Los minutos deben ser un número entero',
            'pminute.regex' => 'Los minutos deben ser un número entero positivo',

            'pseconds.required' => 'Los segundos son obligatorio.',
            'pseconds.numeric' => 'Los segundos deben ser un número entero',
            'pseconds.regex' => 'Los segundos deben ser un número entero positivo',
            
        ];
    }
}
