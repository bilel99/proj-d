<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class AlertRequest extends FormRequest
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
            'page_id' => [
                'nullable',
                'numeric',
            ],
            'title' => [
                'required',
                'min:2',
                'max:255',
            ],
            'content' => [
                'required',
                'min:2',
                'max:255',
            ],
            'icon' => [
                'nullable',
                'min:2',
                'max:255',
            ],
            'types' => [
                'nullable',
                'max:1',
                'numeric',
            ],
        ];
    }
}
