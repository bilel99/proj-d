<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class PageRequest extends FormRequest
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
            'unique_name' => [
                'nullable',
                'min:2',
                'max:255',
                'unique' => Rule::unique('pages')->ignore($this->page),
            ],
            'title' => [
                'nullable',
                'min:2',
                'max:255',
            ],
            'content' => [
                'nullable',
            ],
        ];
    }
}
