<?php

namespace App\Http\Controllers\Front;

use App\Models\Pages;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class HeroBannerController extends Controller
{
    /**
     * homeHeroBanner
     *
     * @return JsonResponse
     */
    public function homeHeroBanner(): JsonResponse
    {
        $response = new JsonResponse();

        return $response->setData([
            'data' => Pages::getPage(Pages::PAGE_BANIERE_HOME),
            'logo_default' => asset('front/img/logos/logo-icon.png'),
            'route_contact' => route('front.contacts'),
        ]);
    }

    /**
     * contactHeroBanner
     *
     * @return JsonResponse
     */
    public function contactHeroBanner(): JsonResponse
    {
        $response = new JsonResponse();

        return $response->setData([
            'data' => Pages::getPage(Pages::PAGE_BANIERE_CONTACT),
            'logo_default' => asset('front/img/logos/logo-icon.png'),
            'route_contact' => route('front.contacts'),
        ]);
    }

    /**
     * aboutHeroBanner
     *
     * @return JsonResponse
     */
    public function aboutHeroBanner(): JsonResponse
    {
        $response = new JsonResponse();

        return $response->setData([
            'data' => Pages::getPage(Pages::PAGE_BANIERE_QUI_SOMME_NOUS),
            'logo_default' => asset('front/img/logos/logo-icon.png'),
            'route_contact' => route('front.contacts'),
        ]);
    }

    /**
     * priceHeroBanner
     *
     * @return JsonResponse
     */
    public function priceHeroBanner(): JsonResponse
    {
        $response = new JsonResponse();

        return $response->setData([
            'data' => Pages::getPage(Pages::PAGE_BANIERE_TARIFS),
            'logo_default' => asset('front/img/logos/logo-icon.png'),
            'route_contact' => route('front.contacts'),
        ]);
    }
}
