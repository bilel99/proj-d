<?php

namespace App\Http\Requests;

use App\Models\Alerts;
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
            'title.required' => __('globals.errors.title_bad_required'),
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
                'numeric',
                Rule::in(array_keys(
                    Alerts::getTypes()
                ))
            ],
            'levels' => [
                'nullable',
                'numeric',
                Rule::in(array_keys(
                    Alerts::getLevels()
                ))
            ],
        ];
    }
}
