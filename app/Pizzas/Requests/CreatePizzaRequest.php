<?php

namespace App\Pizzas\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePizzaRequest extends FormRequest
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
            'type' => ['required'],
            'base' => ['required'],
            'name' => ['required'],
            'toppings' => ['nullable'],
        ];
    }

    public function messages(){
        return [
            'name.required' => 'El campo nombre es requerido',
            'type.required' => 'El campo Tipo de Pizza es requerido',
            'base.required' => 'El campo Tipo de Borde es requerido',
        ];
    }
}
