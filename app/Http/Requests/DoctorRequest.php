<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class DoctorRequest extends FormRequest
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
            'name' => [
                'required',
                'min:2',
                'max:255',
            ],
            'firstname' => [
                'required',
                'min:2',
                'max:255',
            ],
            'civility' => [
                'nullable',
                'min:2',
                'max:5',
            ],
            'email' => [
                'required',
                'email',
                'unique' => Rule::unique('doctors')->ignore($this->doctor),
                'min:2',
                'max:255',
            ],
        ];
    }
}
