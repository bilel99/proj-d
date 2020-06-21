<?php

namespace App\Http\Requests;

use App\Models\Contacts;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ContactRequest extends FormRequest
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
            'doctor_id.required' => __('globals.errors.doctor_id_bad_required'),
            'objet_demande.required' => __('globals.errors.objet_demande_bad_required'),
            'civility.required' => __('globals.errors.civility_bad_required'),
            'name.required' => __('globals.errors.name_bad_required'),
            'firstname.required' => __('globals.errors.firstname_bad_required'),
            'address.required' => __('globals.errors.address_bad_required'),
            'postal_code.required' => __('globals.errors.postal_code_bad_required'),
            'email.required' => __('globals.errors.email_bad_required'),
            'email.email' => __('globals.errors.email_bad_format'),
            'phone.required' => __('globals.errors.phone_bad_required'),
            'phone.regex' => __('globals.errors.phone_bad_pattern'),
            'date_consultation.required' => __('globals.errors.date_consultation_bad_required'),
            'objet_demande_doctor.required' => __('globals.errors.objet_demande_doctor_bad_required'),
            'precisions.required' => __('globals.errors.precisions_bad_required'),
            'address.min' => __('globals.errors.min_required'),
            'postal_code.min' => __('globals.errors.cp_valid'),
            'postal_code.max' => __('globals.errors.cp_valid'),
            'date_consultation.date' => __('globals.errors.date_valid'),
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
            'doctor_id' => [
                'required',
            ],
            'objet_demande' => [
                'required',
                'min:2',
                'max:255',
                Rule::in(array_keys(
                    Contacts::objDemandeOptions()
                ))
            ],
            'civility' => [
                'required',
                Rule::in(array_keys(
                    Contacts::civilityOptions()
                ))
            ],
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
            'address' => [
                'required',
                'min:7',
                'max:255',
            ],
            'postal_code' => [
                'required',
                'numeric',
                'min:4'
            ],
            'email' => [
                'required',
                'email',
                'min:2',
                'max:255',
            ],
            'phone' => [
                'required',
                'regex:/^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$/'
            ],
            'date_consultation' => [
                'required',
                'date',
            ],
            'objet_demande_doctor' => [
                'required',
                'min:4',
                'max:255',
            ],
            'precisions' => [
                'nullable',
            ]
        ];
    }
}
