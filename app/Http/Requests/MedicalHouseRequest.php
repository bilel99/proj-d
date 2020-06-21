<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class MedicalHouseRequest extends FormRequest
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
     * @return array
     */
    public function messages(): array
    {
        return [
        ];

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array 
    {
        return [
            'title' => [
                'required',
                'min:2',
                'max:255',
            ],
            'content' => [
                'nullable',
            ],
            'map' => [
                'nullable',
                'max:255',
            ],
            'address' => [
                'nullable',
                'min:2',
                'max:255',
            ],
            'compl_address' => [
                'nullable',
                'min:2',
                'max:255',
            ],
            'phone' => [
                'nullable',
                'regex:/^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$/',
            ],
            'hours' => [
                'nullable',
                'max:255',
            ],                      
        ];
    }
}
