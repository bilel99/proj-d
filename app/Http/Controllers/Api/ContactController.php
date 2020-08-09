<?php

namespace App\Http\Controllers\Api;

use App\Mail\ContactMail;
use App\Models\Contacts;
use App\Models\Doctors;
use App\Models\Society;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ContactController extends BaseResourceController
{
    protected $model = Contacts::class;
    protected $modelResource = \App\Http\Resources\Contact::class;

    public function getElementsToContact()
    {
        $response = new JsonResponse();

        return $response->setData([
            'civility' => Contacts::civilityOptions(),
            'objDemandeOptions' => Contacts::objDemandeOptions(),
        ]);
    }

    /**
     * @param Request $request
     * @return JsonResponse|\Symfony\Component\HttpFoundation\JsonResponse
     */
    public function formCreate(Request $request) {
        $validator = Validator::make($request->all(), [
            'doctor_id' => 'nullable',
            'objet_demande' => 'required|' .
                Rule::in(array_keys(
                    Contacts::objDemandeOptions()
                )),
            'civility' => 'required|' .
                Rule::in(array_keys(
                    Contacts::civilityOptions()
                )),
            'name' => 'required|min:2|max:255',
            'firstname' => 'required|min:2|max:255',
            'address' => 'required|min:7|max:255',
            'postal_code' => 'required|numeric|min:4',
            'email' => 'required|email|min:2|max:255',
            'phone' => ['required', 'regex:/^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$/'],
            'date_consultation' => 'required|date',
            'doctor_name' => 'required|min:2|max:255',
            'doctor_firstname' => 'required|min:2|max:255',
            'objet_demande_doctor' => 'required|min:4|max:255',
            'precisions' => 'nullable'
            
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->getMessageBag(),
                'success' => false,
                'errors_form' => true
            ], 200);
        }

        $contact = new Contacts();

        if (!Doctors::isFullNameDoctorExist($request->get('doctor_name'), $request->get('doctor_firstname'))) {
            return response()->json([
                'errors' => __('globals.contact.not_found_doctor'),
                'success' => false,
                'errors_form' => false
            ], 200);
        }

        if ($doctor = Doctors::getFullNameDoctor($request->get('doctor_name'), $request->get('doctor_firstname'))) {
            $contact->doctor_id = $doctor !== null ? $doctor->id : null;
        }

        $contact->objet_demande = $request->get('objet_demande');
        $contact->civility = $request->get('civility');
        $contact->name = $request->get('name');
        $contact->firstname = $request->get('firstname');
        $contact->address = $request->get('address');
        $contact->postal_code = $request->get('postal_code');
        $contact->email = $request->get('email');
        $contact->phone = $request->get('phone');
        $contact->date_consultation = $request->get('date_consultation');
        $contact->objet_demande_doctor = $request->get('objet_demande_doctor');
        $contact->precisions = $request->get('precisions');
        $contact->save();

        // Send mail
        $society = Society::first();
        
        Mail::to($contact->email)
            ->send(new ContactMail($society));

        // @todo faut t'il un accusé de reception ?

        return response()->json([
            'data' => $contact,
            'success' => true,
            'message' => __('globals.contact.success'),
        ], 200);
    }

    /**
     * Save a hashed password
     */
    protected function preSaveStore()
    {
        //
    }

    /**
     * Save a hashed password
     */
    protected function preSaveUpdate()
    {
        $this->preSaveStore();
    }
}
