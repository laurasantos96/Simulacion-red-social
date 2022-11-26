<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WallRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|max:100',
            'content' => 'required|min:10'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'El campo titulo es obligatorio' ,
            'title.max' => 'El titulo no puede tener más de 100 posiciones' ,
            'content'=> [
                'required'=> 'El campo contenido es obligatorio',
                'min'=>'El contenido no puede tener menos de 10 posiciones'
            ]
        ];
    }



}
