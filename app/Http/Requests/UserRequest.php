<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
            'email' => [
                'required',
                'email',
                'unique' => Rule::unique('users')->ignore($this->user),
                'min:2',
                'max:255',
            ],
            'password' => [
                'nullable',
                'min:8',
                'max:255',
                'confirmed',
            ],
        ];
    }
}
