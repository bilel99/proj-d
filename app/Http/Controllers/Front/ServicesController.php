<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Pages;
use Illuminate\Http\JsonResponse;

class ServicesController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function getServices(): JsonResponse
    {
        $response = new JsonResponse();

        return $response->setData([
            'data' => Pages::getPage(Pages::PAGE_NOS_SERVICES),
        ]);
    }
}
