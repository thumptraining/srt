<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreadvanceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'week' => 'required|numeric|regex:/^[\d]{0,11}?$/|max:500',
            'day' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/|',
            'stages' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚz0-9\s]+$/|',
            'categories' => 'required|regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/|',

            'warm' => 'required|min:3|max:500',

            'whours' => 'required|numeric|regex:/^[\d]{0,2}?$/|',
            'wminute' => 'required|numeric|regex:/^[\d]{0,2}?$/|',
            'wseconds' => 'required|numeric|regex:/^[\d]{0,2}?$/|',

            'wzone' => 'required|regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',

            'rep' => 'required|numeric|regex:/^[\d]{0,3}?$/|max:100',

            'workout' => 'required|min:3|max:500',

            'thours' => 'required|numeric|regex:/^[\d]{0,2}?$/|',
            'tminute' => 'required|numeric|regex:/^[\d]{0,2}?$/|',
            'tseconds' => 'required|numeric|regex:/^[\d]{0,2}?$/|',
            'tzone' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚz0-9\s]+$/|min:3|max:100',

            'cool' => 'required|min:3|max:500',

            'chours' => 'required|numeric|regex:/^[\d]{0,2}?$/|',
            'cminute' => 'required|numeric|regex:/^[\d]{0,2}?$/|',
            'cseconds' => 'required|numeric|regex:/^[\d]{0,2}?$/|',
        ];
    }

    public function messages()
    {
        return [
            'week.required' => 'La semana es obligatoria.',
            'week.numeric' => 'La semana debe ser un número.',
            'week.regex' => 'La semana debe ser un número entero.',
            'week.max' => 'El número maximo es de 500',

            'day.required' => 'El día es obligatorio.',
            'day.regex' => 'Solo se admiten letras y espacios.',

            'stages.required' => 'El período es obligatorio.',
            'stages.regex' => 'Solo se admiten letras y espacios.',

            'categories.required' => 'El tipo de entrenamiento es obligatorio.',
            'categories.regex' => 'En tipo de entrenamiento solo se admiten letras y espacios.',

            'warm.required' => 'La descripción del calentamiento es obligatorio.',
            'warm.max' => 'Máximo 500 caracteres',

            'whours.required' => 'La hora es obligatoria.',
            'whours.numeric' => 'Solo debe ser un número.',
            'whours.regex' => 'La hora debe ser un número entero de 2 dígitos.',

            'wminute.required' => 'Los minutos son obligatorios.',
            'wminute.numeric' => 'Solo debe ser un número.',
            'wminute.regex' => 'Los minutos deben ser un número entero de 2 dígitos.',

            'wseconds.required' => 'Los segundos son obligatorios.',
            'wseconds.numeric' => 'Solo debe ser un número.',
            'wseconds.regex' => 'Los segundos deben ser un número entero de 2 dígitos.',

            'wzone.required' => 'La zona es obligatoria.',
            'wzone.regex' => 'En zona solo se admiten letras, numeros y espacios.',

            'rep.required' => 'Las repeticiones son obligatorias.',
            'rep.numeric' => 'Solo debe ser un número.',
            'rep.regex' => 'Las repeticiones deben ser un número entero.',
            'rep.max' => 'Máximo 100 caracteres',

            'workout.required' => 'La descripción del entrenamiento es obligatorio.',
            'workout.max' => 'Máximo 500 caracteres',

            'thours.required' => 'La hora es obligatoria.',
            'thours.numeric' => 'Solo debe ser un número.',
            'thours.regex' => 'La hora debe ser un número entero de 2 dígitos.',

            'tminute.required' => 'Los minutos son obligatorios.',
            'tminute.numeric' => 'Solo debe ser un número.',
            'tminute.regex' => 'Los minutos deben ser un número entero de 2 dígitos.',

            'tseconds.required' => 'Los segundos son obligatorios.',
            'tseconds.numeric' => 'Solo debe ser un número.',
            'tseconds.regex' => 'Los segundos deben ser un número entero de 2 dígitos.',

            'tzone.required' => 'La zona es obligatoria.',
            'tzone.regex' => 'Solo se admiten letras, numeros y espacios.',
            'tzone.max' => 'Máximo 100 caracteres',

            'cool.required' => 'La descripción de la solura es obligatoria.',
            'cool.max' => 'Máximo 500 caracteres',

            'chours.required' => 'La hora es obligatoria.',
            'chours.numeric' => 'Solo debe ser un número.',
            'chours.regex' => 'La hora debe ser un número entero de 2 dígitos.',

            'cminute.required' => 'Los minutos son obligatorios.',
            'cminute.numeric' => 'Solo debe ser un número.',
            'cminute.regex' => 'Los minutos deben ser un número entero de 2 dígitos.',

            'cseconds.required' => 'Los segundos son obligatorios.',
            'cseconds.numeric' => 'Solo debe ser un número.',
            'cseconds.regex' => 'Los segundos deben ser un número entero de 2 dígitos.',
            
        ];
    }
}
