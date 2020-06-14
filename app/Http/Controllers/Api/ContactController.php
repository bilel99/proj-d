<?php

namespace App\Http\Controllers\Api;

use App\Models\Contacts;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $response = new JsonResponse();

        $validator = Validator::make($request->all(), [
            '' => '',
        ]);

        if ($validator->fails()) {
            return new JsonResponse(
                [
                    'error' => $validator->getMessageBag(),
                ]
            );
        }

        $contact = new Contacts();
        $contact->doctor_id = $request->get('doctor_id');
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

        return $response->setData([
            'contact' => $contact,
            'message' => __('globals.message.success')
        ]);
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
