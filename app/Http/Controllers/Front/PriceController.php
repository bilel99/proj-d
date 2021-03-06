<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Pages;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    /**
     * Get prices
     *
     * @return JsonResponse
     */
    public function getPrices(): JsonResponse
    {
        $response = new JsonResponse();

        return $response->setData([
            'data' => Pages::getPage(Pages::PAGE_TARIFS),
            'route_page' => route('front.prices'),
        ]);
    }

    /**
     * @return JsonResponse
     */
    public function getPriceRefound(): JsonResponse
    {
        $response = new JsonResponse();

        return $response->setData([
            'data' => Pages::getPage(Pages::PAGE_SUIS_JE_REMBOURSER),
            'route_page' => route('front.homepage'),
        ]);
    }
}
