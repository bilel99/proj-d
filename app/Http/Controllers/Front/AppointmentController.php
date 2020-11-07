<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Pages;
use Illuminate\Http\JsonResponse;

class AppointmentController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function getAppointment(): JsonResponse
    {
        $response = new JsonResponse();
        
        return $response->setData([
            'data' => Pages::getPage(Pages::PAGE_COMMENT_PRENDRE_RDV),
            'img_default' => asset('front/img/demande-contact.png'),
            'route_page' => route('front.appointement'),
        ]);
    }

    /**
     * @return JsonResponse
     */
    public function getAppointmentDoctors(): JsonResponse
    {
        $response = new JsonResponse();

        return $response->setData([
            'data' => Pages::getPage(Pages::PAGE_CE_QUE_LES_DOCTEUR_NE_FONT_PAS),
            'img_default' => asset('front/img/demande-contact.png'),
            'route_page' => route('front.homepage'),
        ]);
    }

    /**
     * @return JsonResponse
     */
    public function getAppointmentRdv(): JsonResponse
    {
        $response = new JsonResponse();

        return $response->setData([
            'data' => Pages::getPage(Pages::PAGE_UN_RDV_QUEL_DELAI),
            'img_default' => asset('front/img/demande-contact.png'),
            'route_page' => route('front.homepage'),
        ]);
    }
}
