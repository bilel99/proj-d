<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class TransportRequest extends FormRequest
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
            //'email.required' => '',
            //'email.email' => '',
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
            'icon' => [
                'nullable',
                'min:2',
                'max:255',
            ],
            'title' => [
                'required',
                'min:2',
                'max:255',
            ],
            'infos' => [
                'required',
                'min:2',
                'max:255',
            ],
        ];
    }
}
