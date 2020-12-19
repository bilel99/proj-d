<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Pages;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function getAppointment(): JsonResponse
    {
        $response = new JsonResponse();

        $appointment = Pages::getPage(Pages::PAGE_COMMENT_PRENDRE_RDV);

        return $response->setData([
            'data' => $appointment,
            'img_default' => asset('front/img/demande-contact.png') ?? '',
            'media' => Pages::getRetrieveMedia($appointment->media ?? null),
            'route_page' => route('front.appointement'),
        ]);
    }

    /**
     * @return JsonResponse
     */
    public function getAppointmentDoctors(): JsonResponse
    {
        $response = new JsonResponse();

        $appointmentDoctor = Pages::getPage(Pages::PAGE_CE_QUE_LES_DOCTEUR_NE_FONT_PAS);

        return $response->setData([
            'data' => $appointmentDoctor,
            'img_default' => asset('front/img/demande-contact.png') ?? '',
            'media' => Pages::getRetrieveMedia($appointmentDoctor->media ?? null),
            'route_page' => route('front.homepage'),
        ]);
    }

    /**
     * @return JsonResponse
     */
    public function getAppointmentRdv(): JsonResponse
    {
        $response = new JsonResponse();

        $appointmentRdv = Pages::getPage(Pages::PAGE_UN_RDV_QUEL_DELAI);

        return $response->setData([
            'data' => $appointmentRdv,
            'img_default' => asset('front/img/demande-contact.png') ?? '',
            'media' => Pages::getRetrieveMedia($appointmentRdv->media ?? null),
            'route_page' => route('front.homepage'),
        ]);
    }
}
