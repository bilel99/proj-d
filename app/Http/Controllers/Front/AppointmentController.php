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
        
        return $response->setData([
            'data' => Pages::getPage(Pages::PAGE_COMMENT_PRENDRE_RDV),
            'img_default' => asset('front/img/demande-contact.png'),
            'route_page' => route('front.appointement'),
        ]);
    }
}
